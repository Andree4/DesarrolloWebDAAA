<?php
$n = $_POST["numero"];
$suma = 0;
for ($i = 0; $i < strlen($n); $i++) {
    $suma += $n[$i];
}
echo "La suma de digitos es $suma";
