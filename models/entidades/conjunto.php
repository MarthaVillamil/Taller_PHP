<?php

class Conjunto
{
    public function obtenerConjunto($texto)
    {
        $partes = explode(",", $texto);
        $numeros = array();

        foreach ($partes as $parte) {
            $numeros[] = intval(trim($parte));
        }

        return array_unique($numeros);
    }

    public function union($a, $b)
    {
        return array_unique(array_merge($a, $b));
    }

    public function interseccion($a, $b)
    {
        return array_intersect($a, $b);
    }

    public function diferencia($a, $b)
    {
        return array_diff($a, $b);
    }
}