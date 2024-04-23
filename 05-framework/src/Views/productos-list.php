<h3><?= $titulo ?></h3>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?= $producto['codigo'] ?></td>
                <td><?= $producto['nombre'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="index.php?r=producto/guardar" method="post">
    <input type="text" name="nombre">
    <button type="submit">Guardar</button>
</form>