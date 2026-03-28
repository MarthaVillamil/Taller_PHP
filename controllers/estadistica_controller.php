<?php

require_once("../models/entidades/estadistica.php");

$promedio = "";
$mediana = "";
$moda = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["numeros"];
    $estadistica = new Estadistica();
    $numeros = $estadistica->obtenerNumeros($texto);
    $promedio = $estadistica->promedio($numeros);
    $mediana = $estadistica->mediana($numeros);
    $moda = $estadistica->moda($numeros);
}