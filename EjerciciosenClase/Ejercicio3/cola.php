<?php
class Cola
{
    private $primero;
    private $ultimo;
    private $elementos;
    public function __construct()
    {
        $this->primero = null;
        $this->ultimo = null;
        $this->elementos = array();
    }
    public function insertar($elemento)
    {
        array_push($this->elementos, $elemento);
        $this->ultimo = $elemento;
        if ($this->primero === null) {
            $this->primero = $elemento;
        }
    }
    public function eliminar()
    {
        if ($this->primero !== null) {
            $elementoEliminado = !empty ($this->elementos) ? array_shift($this->elementos) : null;
            $this->primero = !empty ($this->elementos) ? reset($this->elementos) : null;
            if (empty ($this->elementos)) {
                $this->ultimo = null;
            }
            return $elementoEliminado;
        }
        return null;
    }
    public function mostrar()
    {
        return $this->elementos;
    }
}