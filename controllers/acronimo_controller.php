<?php

require_once("../models/entidades/acronimo.php");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];

    $acronimo = new Acronimo();
    $resultado = $acronimo->generar($texto);
}