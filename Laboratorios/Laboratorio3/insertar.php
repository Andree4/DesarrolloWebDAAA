<?php
include 'conexion.php';
$numero = $_POST['numero'];
for ($i = 1; $i <= $numero; $i++) {
    //fotografia
    $nombref = $_FILES["fotografia$i"]['name'];  //obtenemos el nombre del archivo
    $temp = $_FILES["fotografia$i"]['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo = explode(".", $nombref);
    $extension = $arreglo[1];// obtengo la extension del archivo
    $nuevonombre = uniqid() . "." . $extension;//Le doy un nuevo nombre de archivo
    copy($temp, "images/" . $nuevonombre);//copio el archivo a la carpeta de imagenes

    $Nombres = $_POST["nombres$i"];
    $Apellidos = $_POST["apellidos$i"];
    $CU = $_POST["cu$i"];
    $Sexo = $_POST["sexo$i"];
    $Codcarrera = $_POST["codcarrera$i"];

    $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera)
    VALUES ('$nuevonombre','$Nombres', '$Apellidos', '$CU', '$Sexo', '$Codcarrera')";
    $result = $con->query($sql);
    if (!$result) {
        die("Error al insertar datos: " . $con->error);
    }
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="2; url=ListaALumnos.php">