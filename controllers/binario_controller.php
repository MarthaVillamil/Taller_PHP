<?php

require_once("../models/entidades/binario.php");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    $binario = new Binario();
    $resultado = $binario->convertir($numero);
}