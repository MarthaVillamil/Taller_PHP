<?php

class Acronimo
{
    public function generar($texto)
    {
        $texto = str_replace(",", "", $texto);
        $texto = str_replace(".", "", $texto);
        $texto = str_replace("!", "", $texto);
        $texto = str_replace("?", "", $texto);
        $texto = str_replace(":", "", $texto);
        $texto = str_replace(";", "", $texto);
        $texto = str_replace("'", "", $texto);
        $texto = str_replace('"', "", $texto);

        $texto = str_replace("-", " ", $texto);

        $palabras = explode(" ", trim($texto));

        $resultado = "";

        foreach ($palabras as $palabra) {
            if ($palabra != "") {
                $resultado = $resultado . strtoupper($palabra[0]);
            }
        }

        return $resultado;
    }
}