<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParesImpares</title>
</head>

<body>
    <?php
    $numeros = range(1, 20);
    $numeros_pares = [];
    $numeros_impares = [];
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $numeros_pares[] = $numero;
        } else {
            $numeros_impares[] = $numero;
        }
    }
    echo "Números pares: " . implode(" - ", $numeros_pares);
    echo "<br>";
    echo "Números impares: " . implode(" - ", $numeros_impares);
    ?>
</body>

</html>