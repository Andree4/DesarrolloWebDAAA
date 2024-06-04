<?php
include 'conexion.php';
$sql = "SELECT imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera 
FROM libros l LEFT JOIN editoriales e ON l.ideditorial=e.editorial";
$result = $con->query($sql);
?>
<table border='1'>
    <tr>
        <td>Imagen</td>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Editorial</td>
        <td>Año</td>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["ideditorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    }
    mysqli_close($con);
