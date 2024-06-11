<?php
include 'conexion.php';
$id = $_POST['id'];

$sql = "SELECT mensaje FROM correos WHERE id = $id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h1>Mensaje:</h1>";
    $mensaje = $row["mensaje"];
    echo "<p>$mensaje</p>";
} else {
    echo "No hay id";
}
mysqli_close($con);
