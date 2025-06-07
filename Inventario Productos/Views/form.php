<!DOCTYPE html>
<html>
<head>
    <title>Registrar Producto</title>
</head>
<body>
    <h2>Nuevo Producto</h2>
    <form method="post" action="index.php?accion=guardar">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad" required><br>
        <label>Precio Unitario:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <a href="index.php?accion=listar">Ver productos</a>
</body>
</html>
