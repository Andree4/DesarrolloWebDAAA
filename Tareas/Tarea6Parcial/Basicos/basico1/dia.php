<?php
$dia = $_GET['numero'];
if ($dia >= 1 && $dia <= 7) {
    echo "<select name='dias'>";
    switch ($dia) {
        case 1:
            echo "<option value='lunes'>Lunes</option>";
            break;
        case 2:
            echo "<option value='martes'>Martes</option>";
            break;
        case 3:
            echo "<option value='miercoles'>Miercoles</option>";
            break;
        case 4:
            echo "<option value='jueves'>Jueves</option>";
            break;
        case 5:
            echo "<option value='viernes'>Viernes</option>";
            break;
        case 6:
            echo "<option value='sabado'>Sabado</option>";
            break;
        case 7:
            echo "<option value='domingo'>Domingo</option>";
            break;
    }
    echo "</select>";
} else {
    echo "Ingrese un valor entre 1 y 7";
    header("refresh:1;url=Ejercicio4.php");
}