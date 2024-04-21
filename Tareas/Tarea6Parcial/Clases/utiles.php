<?php
class Utiles
{
    public $cadena;

    public function __construct($cadena)
    {
        $this->cadena = $cadena;
    }

    public function aumentarguiones($n)
    {
        $resultado = '';
        $longitud = strlen($this->cadena);

        for ($i = 0; $i < $longitud; $i++) {
            $resultado = $resultado . $this->cadena[$i];
            if ($i != $longitud - 1) {
                for ($j = 0; $j < $n; $j++) {
                    $resultado = $resultado . '-';
                }
            }
        }

        return $resultado;
    }
}