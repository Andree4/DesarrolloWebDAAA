<?php
$n = $_POST["numero"];
$suma = 0;
$digitos = str_split($n);
foreach ($digitos as $digito) {
    $suma += $digito;
}
echo "La suma de digitos es $suma";
