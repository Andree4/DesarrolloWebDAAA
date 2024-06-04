<?php
include ("conexion.php");
$sql = "SELECT id, imagen FROM libros";
$result = $con->query($sql);
?>
<?php while ($libro = $result->fetch_assoc()) { ?>
    <button onclick="mostrardatos()">
        <img src="images/<?php echo $libro["imagen"] ?>" width="50px" height="50px" onclick="libros()">
    </button>


<?php } ?>
</div>