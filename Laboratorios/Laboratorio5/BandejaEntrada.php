<?php
include 'conexion.php';
$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE tipo = 'E'";
$result = $con->query($sql);
?>
<ul>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div onclick="MostrarMensaje(<?php echo $row['id']; ?>)"
                style="border: 1px solid black; padding: 20px; list-style: none; margin-right: 30px; cursor: pointer;"
                data-id="<?php echo $row['id']; ?>">
                <h3 style="margin: 0px"><?php echo $row["asunto"]; ?></h3><br>
                <span>De: <?php echo $row["correo"]; ?></span><br>
            </div>
            <?php
        }
    } else {
        echo "No hay correos";
    }
    ?>
</ul>
<?php
mysqli_close($con);
