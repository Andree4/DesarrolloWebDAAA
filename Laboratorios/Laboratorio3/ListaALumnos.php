<?php
include 'conexion.php';
$numero = $_COOKIE['numero'];
$sql = "SELECT id,fotografia, nombres, apellidos, cu, sexo, codigocarrera 
FROM alumnos a LEFT JOIN carreras c ON a.codigocarrera=c.codigo";
$result = $con->query($sql);
$i = 1;

$sql2 = "SELECT * From alumnos order by id desc limit $numero";
$result2 = $con->query($sql2);
?>
<table border='1'>
    <tr>
        <td>Nro</td>
        <td>Fotografía</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>CU</td>
        <td>Sexo</td>
        <td>Carrera</td>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="images/<?php echo $row["fotografia"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["cu"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["codigocarrera"]; ?></td>
                <td><?php echo $row["id"]; ?></td>
            </tr>
            <?php

        }
        ?>
    </table>
    <?php
    }
    mysqli_close($con);
