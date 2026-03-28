<?php

require_once("../models/entidades/arbol.php");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textoPreorden = $_POST["preorden"];
    $textoInorden = $_POST["inorden"];

    $arbol = new Arbol();

    $preorden = $arbol->obtenerRecorrido($textoPreorden);
    $inorden = $arbol->obtenerRecorrido($textoInorden);

    $raiz = $arbol->construir($preorden, $inorden);
    $resultado = $arbol->mostrar($raiz);
}