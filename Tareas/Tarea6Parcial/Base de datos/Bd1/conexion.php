<?php
$con = new mysqli("localhost", "root", "", "bdtienda");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
