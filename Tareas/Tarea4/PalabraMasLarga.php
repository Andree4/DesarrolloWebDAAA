<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PalabraMasLarga</title>
</head>

<body>
    <?php
    $cadena = $_POST['cadena'];
    $arreglo = explode(" ", $cadena);
    $ps = 0;
    $mayor = 0;
    foreach ($arreglo as $indice => $valor) {
        if (strlen($valor) > $mayor) {
            $ps = $indice;
            $mayor = strlen($valor);
        }
    }
    echo "La palabra más larga es: " . $arreglo[$ps];
    ?>
</body>

</html>