<?php

class Acronimo {

    public function convertir($frase) {

        $frase = str_replace("-", " ", $frase);
        $frase = preg_replace("/[^a-zA-Z ]/", "", $frase);

        $palabras = explode(" ", $frase);
        $acronimo = "";

        foreach ($palabras as $palabra) {
            if (!empty($palabra)) {
                $acronimo .= strtoupper($palabra[0]);
            }
        }

        return $acronimo;
    }
}