<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h2>Inventario</h2>
    <a href="index.php?accion=formulario">Registrar producto</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Valor Total</th>
        </tr>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td><?= $p['cantidad'] ?></td>
            <td>$<?= number_format($p['precio_unitario'], 2) ?></td>
            <td>$<?= number_format($p['total'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
