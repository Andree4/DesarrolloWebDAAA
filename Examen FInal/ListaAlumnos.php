<?php
class ListaAlumnos
{
    private $CU;
    private $Nombres;
    private $Apellidos;
    private $Lista = [];
    public function __construct($Lista)
    {
        $this->CU = $Lista->CU;
        $this->Nombres = $Lista->Nombres;
        $this->Apellidos = $Lista->Apellidos;
        $this->Lista = $Lista->Lista;
    }
    public function insetarAlumno()
    {

    }

}