<?php

class Binario {

    public function convertir($numero) {

        if ($numero == 0) return "0";

        $binario = "";

        while ($numero > 0) {
            $binario = ($numero % 2) . $binario;
            $numero = intdiv($numero, 2);
        }

        return $binario;
    }
}