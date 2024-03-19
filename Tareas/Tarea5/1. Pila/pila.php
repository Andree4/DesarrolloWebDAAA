<?php
class Pila
{
    private $pila;

    public function __construct()
    {
        $this->pila = [];
    }

    public function insertar($elemento)
    {
        array_push($this->pila, $elemento);
    }

    public function eliminar()
    {
        if (!$this->estaVacia()) {
            return array_pop($this->pila);
        }
        return null;
    }

    public function mostrar()
    {
        return $this->pila;
    }

    public function estaVacia()
    {
        return empty ($this->pila);
    }
}