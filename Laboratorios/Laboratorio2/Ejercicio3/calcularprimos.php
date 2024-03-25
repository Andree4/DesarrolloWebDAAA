<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcularPrimos</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid green;
            text-align: center;
            background-color: yellow;
        }
    </style>
</head>

<body>
    <?php
    $cant = $_POST["numero"];
    $cont = 0;
    $num = 2;
    echo "<table>";
    echo "<tr><th>Números primos</th></tr>";
    while ($cont < $cant) {
        $Primo = true;
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                $Primo = false;
                break;
            }
        }
        if ($Primo) {
            echo "<tr><td>$num</td></tr>";
            $cont++;
        }
        $num++;
    }
    echo "</table>";
    ?>
</body>

</html>