<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
include 'conexion.php';
$sql = "SELECT idproducto, producto, precio, imagen FROM producto";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>

<body>
    <h2>Listado de Productos</h2>
    <p>Usuario: <?php echo $usuario; ?> - Tipo: <?php echo ($nivel == 1) ? 'Administrador' : 'Usuario'; ?></p>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['idproducto']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><img src="<?php echo $row['imagen']; ?>" width="100" height="100"></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron productos.</td></tr>";
        }
        ?>
    </table>

</body>

</html>