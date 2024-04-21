<?php
$cadena = $_POST["cadena"];
if (strpos($cadena, "SCRIPT") !== false) {
    echo "Tiene la palabra SCRIPT<br>";
    $cadenaSinScript = str_replace("SCRIPT", "", $cadena);
    echo "Cadena sin la palabra script: " . $cadenaSinScript;
} else {
    echo "La cadena no contiene la palabra SCRIPT.";
}
