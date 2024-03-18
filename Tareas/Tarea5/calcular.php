<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular</title>
</head>

<body>
    <?php
    $cadena = $_POST['cadena'];
    $operacion = $_POST['Operacion'];
    include 'operacionescadena.php';
    $cad = new operacionescadena($cadena);
    switch ($operacion) {
        case 'invertir':
            echo $cad->invertir($cadena);
            break;
        case 'mayusculas':
            echo $cad->mayusculas($cadena);
            break;
        case 'minusculas':
            echo $cad->minusculas($cadena);
            break;
    }
    ?>
</body>

</html>