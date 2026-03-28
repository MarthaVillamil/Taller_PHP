<?php

session_start();
require_once("../models/entidades/calculadora.php");

$resultado = "";

if (!isset($_SESSION["historial"])) {
    $_SESSION["historial"] = array();
}

if (isset($_POST["borrar"])) {
    $_SESSION["historial"] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["borrar"])) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    $calculadora = new Calculadora();
    $resultado = $calculadora->calcular($numero1, $numero2, $operacion);
    $simbolo = $calculadora->obtenerSimbolo($operacion);

    $_SESSION["historial"][] = $numero1 . " " . $simbolo . " " . $numero2 . " = " . $resultado;
}

$historial = $_SESSION["historial"];