<?php

class Secuencia
{
    public function fibonacci($numero)
    {
        $serie = array();
        if ($numero <= 0) {
            return $serie;
        }
        if ($numero >= 1) {
            $serie[] = 0;
        }
        if ($numero >= 2) {
            $serie[] = 1;
        }
        for ($i = 2; $i < $numero; $i++) {
            $serie[] = $serie[$i - 1] + $serie[$i - 2];
        }
        return $serie;
    }
    public function factorial($numero)
    {
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado = $resultado * $i;
        }
        return $resultado;
    }
}