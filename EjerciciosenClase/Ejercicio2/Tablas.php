<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 8; 
$b = 8; 
echo "tamaño de la tabla: " , $a , " columnas " , $b , " filas " , "<br>";

$cont = 2;
echo "<table border=1>";
for($i = 0; $i < $a; $i++) {
    echo "<tr>";
    for($j = 0; $j < $b; $j++) {
        echo "<td>" , $cont , "</td>";
        $cont += 2;
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>