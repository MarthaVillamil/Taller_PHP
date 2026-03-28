<?php

class Estadistica
{
    public function obtenerNumeros($texto)
    {
        $partes = explode(",", $texto);
        $numeros = array();

        foreach ($partes as $parte) {
            $numeros[] = floatval(trim($parte));
        }

        return $numeros;
    }

    public function promedio($numeros)
    {
        $suma = array_sum($numeros);
        $cantidad = count($numeros);

        return $suma / $cantidad;
    }

    public function mediana($numeros)
    {
        sort($numeros);
        $cantidad = count($numeros);
        $mitad = floor($cantidad / 2);

        if ($cantidad % 2 == 0) {
            return ($numeros[$mitad - 1] + $numeros[$mitad]) / 2;
        } else {
            return $numeros[$mitad];
        }
    }

    public function moda($numeros)
    {
        $frecuencias = array();

        foreach ($numeros as $numero) {
            $clave = (string)$numero;

            if (isset($frecuencias[$clave])) {
                $frecuencias[$clave] = $frecuencias[$clave] + 1;
            } else {
                $frecuencias[$clave] = 1;
            }
        }

        $maximaFrecuencia = max($frecuencias);
        $modas = array();

        foreach ($frecuencias as $numero => $frecuencia) {
            if ($frecuencia == $maximaFrecuencia) {
                $modas[] = $numero;
            }
        }

        return $modas;
    }
}