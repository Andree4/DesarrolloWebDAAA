<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $tipo = 'S';
    include 'conexion.php';
    $sql = "INSERT INTO correos (tipo, correo, asunto, mensaje, estado) VALUES ('$tipo', '$correo', '$asunto', '$mensaje', 'P')";
    if ($con->query($sql) === TRUE) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    mysqli_close($con);
}