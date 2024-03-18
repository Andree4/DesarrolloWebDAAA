<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacionescadena</title>
</head>

<body>
    <?php
    class operacionescadena
    {
        public function __construct($cadena)
        {
            $this->cadena = $cadena;
        }
        public function invertir($cadena)
        {
            $cadena = strrev($cadena);
            return $cadena;
        }
        public function mayusculas($cadena)
        {
            $cadena = strtoupper($cadena);
            return $cadena;
        }
        public function minusculas($cadena)
        {
            $cadena = strtolower($cadena);
            return $cadena;
        }

    }
    ?>
</body>

</html>