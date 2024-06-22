<?php
include ("conexion.php");
$usuario = $_POST['user'];
$password = $_POST['password'];
$sql = "SELECT usuario,password from usuarios where usuario='$usuario' 
and password='$password'";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    echo "Usuario Autenticado";
} else {
    echo "Error usuario o Contraseña no valido";
}
