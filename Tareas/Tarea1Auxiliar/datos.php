<?php
$texto = $_POST['texto'];
//conexion a base de datos para la tarea 2
$conn = new mysqli("localhost", "root", "", "bd_universidad");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$sql = "SELECT nombre FROM carreras WHERE nombre LIKE '%$texto%'";
$result = $conn->query($sql);

$resultados = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($resultados, $row['nombre']);
    }
}

$conn->close();

echo json_encode($resultados);