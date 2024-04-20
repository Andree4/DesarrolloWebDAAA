<?php
if (!isset($_COOKIE['cadena'])) {
    $cadena = $_POST['cadena'];
} else {
    $cadena = "";
}
setcookie('cadena', $cadena, 0);
echo " Esta  es su cadena $cadena";
$opcion = $_POST['opcion'];
switch ($opcion) {
    case '1':
        $cadenaMay = touppercase($cadenaMay);
        echo $cadenaMay;
        break;
    case '2':
        break;
    case '3';
        break;

}


