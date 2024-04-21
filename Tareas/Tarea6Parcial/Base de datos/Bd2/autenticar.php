<?php
session_start();

include 'conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM usuario WHERE usuario='$username' AND password='$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['nivel'] = $row['nivel'];
    header("Location: listar_productos.php");
} else {
    echo "Error: Usuario o contraseña incorrectos.";
}