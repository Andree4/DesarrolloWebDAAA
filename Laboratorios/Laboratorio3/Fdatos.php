<?php
include 'conexion.php';
$numero = $_POST['numero'];
setcookie("numero", $numero, 0);
?>
<table>
    <tr>
        <td></td>
        <td>Fotografía</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>CU</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sexo</td>
        <td>Carrera</td>
    </tr>
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <?php
        for ($i = 0; $i < $numero; $i++) {
            ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><input type="file" name="fotografia<?php echo $i + 1; ?>"></td>
                <td><input type="text" name="nombres<?php echo $i + 1; ?>"></td>
                <td><input type="text" name="apellidos<?php echo $i + 1; ?>"></td>
                <td><input type="text" name="cu<?php echo $i + 1; ?>"></td>
                <td><input type="radio" name="sexo<?php echo $i + 1; ?>" value="M">Masculino
                    <input type="radio" name="sexo<?php echo $i + 1; ?>" value="F">Femenino
                </td>
                <td>
                    <select name="codcarrera<?php echo $i + 1; ?>">
                        <?php
                        $sql = "SELECT codigo, carrera FROM carreras";
                        $result = $con->query($sql);
                        while ($carrera = $result->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $carrera['codigo'] ?>"><?php echo $carrera['carrera'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <?php
        }
        ?>
</table>
<input type="hidden" name="numero" value="<?php echo $numero ?>">
<input type="submit" value="Insertar">
<input type="reset" value="Borrar">
</form>