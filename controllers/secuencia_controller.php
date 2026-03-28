<?php
require_once("../models/entidades/secuencia.php");
$resultado = "";
$operacion = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $operacion = $_POST["operacion"];
    $secuencia = new Secuencia();
    if ($operacion == "fibonacci") {
        $resultado = $secuencia->fibonacci($numero);
    }
    if ($operacion == "factorial") {
        $resultado = $secuencia->factorial($numero);
    }
}