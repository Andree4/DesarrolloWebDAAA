<?php
$n = $_POST["numero"];
$suma = array_sum(str_split($n));
echo "La suma de dígitos es $suma";

