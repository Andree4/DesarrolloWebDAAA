<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<?php
function palabraMasLarga($cadena) {
    // Divide la cadena en palabras separadas por espacios
    $palabras = explode(" ", $cadena);
    
    // Inicializa la variable para almacenar la palabra más larga
    $palabra_mas_larga = "";
    
    // Itera sobre cada palabra para encontrar la más larga
    foreach ($palabras as $palabra) {
        // Comprueba si la longitud de la palabra actual es mayor que la de la palabra más larga actual
        if (strlen($palabra) > strlen($palabra_mas_larga)) {
            // Si es así, actualiza la palabra más larga
            $palabra_mas_larga = $palabra;
        }
    }
    
    // Imprime la palabra más larga
    echo "La palabra más larga es: " . $palabra_mas_larga;
}

// Ejemplo de uso
$cadena = "Esta es una cadena de ejemplo para probar el programa";
palabraMasLarga($cadena);
?>

</body>
</html>