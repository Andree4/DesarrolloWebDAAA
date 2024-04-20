<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendario.css">
    <title>Document</title>
</head>

<body>
    <?php
    $mes = $_POST["mes"];
    $año = $_POST["año"];
    $tamaño = $_POST["tamaño"];
    $num_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $año);
    $fecha = $año . "-" . $mes . "-" . 01;
    $dia_semana = date('N', strtotime($fecha));
    ?>
    <style>
        table {
            width:
                <?php echo "$tamaño", "%" ?>
            ;
            height: auto;
        }
    </style>
    <table>
        <tr class="meses">
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
            <td>Sabado</td>
            <td>Domingo</td>
        </tr>
        <?php
        $contd = 1;
        //do {
        ?>
        <tr>
            <?php
            $i = 0;
            if ($i < 7) {
                for ($i; $i < 7; $i++) {
                    if ($i + 1 >= $dia_semana) {
                        ?>
                        <td class="impar"><?php echo $contd++; ?></td>
                        <?php
                    } else {
                        ?>
                        <td class="impar"></td>
                        <?php
                    }
                }
            }
            ?>
        </tr>
        <?php for ($f = 0; $f < 4; $f++) {
            $h = 0;
            ?>
            <tr>
                <?php for ($h; $h < 7; $h++) {
                    if ($contd <= $num_dias) {
                        if ($f % 2 == 0) {
                            ?>
                            <td class="par"><?php echo $contd++; ?></td>
                            <?php
                        } else {
                            ?>
                            <td class="impar"><?php echo $contd++; ?></td>
                            <?php
                        }
                    } else {
                        if ($f % 2 == 0) {
                            ?>
                            <td class="par"></td>
                            <?php
                        } else {
                            ?>
                            <td class="impar"></td>
                            <?php
                        }

                    }
                }
                ?>
            </tr><?php
        }
        ?>
    </table>
</body>

</html>