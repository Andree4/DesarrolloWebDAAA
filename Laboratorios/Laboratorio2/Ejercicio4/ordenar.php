<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabras Ordenadas</title>
    <style>
        ul {
            border: 1px solid red;
            background-color: yellow;
            text-align: center;
            margin-left: 45%;
            margin-right: 45%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include 'ordenarpalabras.php';
    $palabras = $_POST['palabras'];
    $palabrasOrdenadas = ordenarPalabras($palabras);
    echo "<h2>Palabras Ordenadas:</h2>";
    echo "<ul>";
    foreach ($palabrasOrdenadas as $palabra) {
        echo "<li>$palabra</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>