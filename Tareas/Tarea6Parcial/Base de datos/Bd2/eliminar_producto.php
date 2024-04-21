<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 1) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_producto = $_GET['id'];
    include 'conexion.php';
    $sql = "DELETE FROM producto WHERE idproducto = $id_producto";

    if ($con->query($sql) === TRUE) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto: " . $con->error;
    }
} else {
    echo "ID de producto no válido.";
}
?>
<meta http-equiv="refresh" content="3; listar_productos.php">