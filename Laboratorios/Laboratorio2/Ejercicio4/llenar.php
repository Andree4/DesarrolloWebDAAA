<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cantidad = $_POST['cantidad'];
    ?>
    <h2>Ingrese las palabras:</h2>
    <form action='ordenar.php' method='POST'>
        <?php
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<input type='text' name='palabras[]' required><br>";
        }
        ?>
        <input type="submit" value="Ordenar" />
    </form>
</body>

</html>