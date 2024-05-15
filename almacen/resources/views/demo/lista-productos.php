<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>

        <table border="1">
            <thead>
                <th>id</th>
                <th>Nombre</th>
            </thead>
            <tbody>
                <?php foreach($productos as $producto): ?>
                <tr>
                    <td><?= $producto->getId() ?></td>
                    <td><?= $producto->getNombre() ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>