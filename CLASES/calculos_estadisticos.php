<?php

class CalculosEstadisticos {

    private function limpiarDatos($datos) {

        $datos = array_map('trim', $datos);

        $datos = array_filter($datos, function($v) {
            return $v !== "" && is_numeric($v);
        });

        return array_map('floatval', $datos);
    }
    public function promedio($datos) {

        $datos = $this->limpiarDatos($datos);

        if (count($datos) == 0) return 0;

        return array_sum($datos) / count($datos);
    }
    public function mediana($datos) {

        $datos = $this->limpiarDatos($datos);

        if (count($datos) == 0) return 0;

        sort($datos);

        $n = count($datos);
        $mitad = floor($n / 2);

        if ($n % 2 == 0) {
            return ($datos[$mitad - 1] + $datos[$mitad]) / 2;
        } else {
            return $datos[$mitad];
        }
    }
    public function moda($datos) {

        $datos = $this->limpiarDatos($datos);

        if (count($datos) == 0) return "No hay datos";

        $conteo = [];

        foreach ($datos as $valor) {
            $key = (string)$valor;

            if (!isset($conteo[$key])) {
                $conteo[$key] = 0;
            }

            $conteo[$key]++;
        }

        $max = max($conteo);

        if ($max == 1) {
            return "No hay moda";
        }

        $moda = [];

        foreach ($conteo as $valor => $frecuencia) {
            if ($frecuencia == $max) {
                $moda[] = (float)$valor;
            }
        }

        return $moda;
    }
}