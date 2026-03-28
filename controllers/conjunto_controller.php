<?php

require_once("../models/entidades/conjunto.php");

$union = array();
$interseccion = array();
$diferenciaAB = array();
$diferenciaBA = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textoA = $_POST["conjunto_a"];
    $textoB = $_POST["conjunto_b"];

    $conjunto = new Conjunto();

    $a = $conjunto->obtenerConjunto($textoA);
    $b = $conjunto->obtenerConjunto($textoB);

    $union = $conjunto->union($a, $b);
    $interseccion = $conjunto->interseccion($a, $b);
    $diferenciaAB = $conjunto->diferencia($a, $b);
    $diferenciaBA = $conjunto->diferencia($b, $a);
}