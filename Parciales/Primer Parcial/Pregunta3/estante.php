<?php
class estante
{
    private $fila1;
    private $fila2;
    private $tope;
    private $tope2;
    function __construct()
    {
        $this->fila1 = "";
        $this->fila2 = "";
        $this->tope = -1;
        $this->tope2 = -1;
    }
    public function InsertarFila1($Libro)
    {
        $this->tope++;
        $this->fila1[$this->tope] = $Libro;
    }
    public function InsertarFila2($Libro)
    {
        $this->tope2++;
        $this->fila2[$this->tope] = $Libro;
    }
    function mostrarArmario()
    {
        echo "<table>";
        echo "<tr>";
        for ($i = $this->tope; $i >= 0; $i--) {
            echo "<td>$this->fila1[$i]</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = $this->tope2; $i >= 0; $i--) {
            echo "<td>$this->fila2[$i]</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
}
