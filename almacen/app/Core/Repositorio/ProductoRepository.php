<?php

namespace App\Core\Repositorio;

use App\Core\Dominio\Producto;
use Illuminate\Support\Facades\DB;

class ProductoRepository
{
    public function searchProducto(string $filtro)
    {
        // convierte en mayusculas el filtro y el nombre en la bd
        $data = DB::select(
            "
            SELECT * 
            FROM producto
            WHERE upper(nombre) LIKE :FILTRO
            ORDER BY codigo
            ",
            [
                ':FILTRO' => '%' . strtoupper($filtro) . '%', // concatena %filtro% para el LIKE
            ]
        );

        $list = [];

        foreach ($data as $row) {
            $list[$row->id] = new Producto(
                $row->id,
                $row->codigo,
                $row->nombre,
                $row->precio,
            );
        }

        // siempre devuelve un array, aunque sea vacío
        return $list;
    }

    public function generarId()
    {
        return DB::scalar("SELECT nextval('producto_id_seq') as id");
    }

    public function storeProducto(Producto $producto)
    {
        return DB::insert(
            "
            INSERT INTO producto(id, codigo, nombre, precio) 
            VALUES (?, ?, ?, ?)
            ON CONFLICT(id)             -- <-- esto es propio de postgres
            DO UPDATE SET    
                codigo = EXCLUDED.codigo,
                nombre = EXCLUDED.nombre,
                precio = EXCLUDED.precio
            ",
            [
                $producto->getId(),
                $producto->getCodigo(),
                $producto->getNombre(),
                $producto->getPrecio(),
            ]
        );
    }

    public function removeProducto(Producto $producto)
    {
        return DB::table('producto')->delete($producto->getId());
    }

    public function getById(int $id): Producto|false
    {
        $row = DB::table('producto')->find($id);

        if (null == $row) {
            return false;
        }

        return new Producto(
            $row->id,
            $row->codigo,
            $row->nombre,
            $row->precio,
        );
    }
}
