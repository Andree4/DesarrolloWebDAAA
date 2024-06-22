<?php
include 'conexion.php';
$materia = $_POST['Materia'];
$sql = "SELECT id, materia, nombres_apellidos, celular, calificacion FROM alumnos WHERE materia = '$materia'";
$result = $con->query($sql);
?>
<table border='1'>
    <tr>
        <td>materia</td>
        <td>nombres_apellidos</td>
        <td>celular</td>
        <td>calificacion</td>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["materia"]; ?></td>
                <td><?php echo $row["nombres_apellidos"]; ?></td>
                <td><?php echo $row["celular"]; ?></td>
                <td><?php echo $row["calificacion"]; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    }
    mysqli_close($con);
