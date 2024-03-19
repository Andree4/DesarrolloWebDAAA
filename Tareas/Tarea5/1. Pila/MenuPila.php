<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pila</title>
</head>

<body>
    <h1>Pila</h1>
    <form action="insertar.php" method="POST">
        <label for="elemento">Insertar elemento:</label>
        <br>
        <input type="text" id="elemento" name="elemento">
        <br>
        <button type="submit">Insertar</button>
    </form>
    <form action="eliminar.php" method="POST">
        <button type="submit">Eliminar</button>
    </form>
    <form action="mostrar.php" method="POST">
        <button type="submit">Mostrar</button>
    </form>
</body>

</html>