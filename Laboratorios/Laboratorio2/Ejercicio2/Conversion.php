<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid green;
            text-align: center;
            background-color: white;
        }
    </style>
</head>

<body>
    <h2>Conversion</h2>
    <table>
        <tr>
            <th>Unidad</th>
            <th>Temperatura</th>
        </tr>
        <?php
        $temperatura = $_POST['temperatura'];
        $unidad = $_POST['Unidad'];
        $celsius = 0;
        $fahrenheit = 0;
        $kelvin = 0;
        switch ($unidad) {
            case 'Celsius':
                $celsius = $temperatura;
                $fahrenheit = ($celsius * 9 / 5) + 32;
                $kelvin = $celsius + 273.15;
                break;
            case 'Fahrenheit':
                $fahrenheit = $temperatura;
                $celsius = ($fahrenheit - 32) * 5 / 9;
                $kelvin = ($fahrenheit + 459.67) * 5 / 9;
                break;
            case 'Kelvin':
                $kelvin = $temperatura;
                $celsius = $kelvin - 273.15;
                $fahrenheit = ($kelvin * 9 / 5) - 459.67;
                break;
        }
        echo "<tr><td>Celsius (°C)</td><td>$celsius</td></tr>";
        echo "<tr><td>Fahrenheit (°F)</td><td>$fahrenheit</td></tr>";
        echo "<tr><td>Kelvin (K)</td><td>$kelvin</td></tr>";
        ?>
    </table>
</body>

</html>