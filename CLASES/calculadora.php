<?php

class Calculadora {

    private $historial = [];

    public function operar($a, $b, $operacion) {

        switch ($operacion) {

            case "suma":
                $resultado = $a + $b;
                break;

            case "resta":
                $resultado = $a - $b;
                break;

            case "multiplicacion":
                $resultado = $a * $b;
                break;

            case "division":
                if ($b == 0) return "Error: División por cero";
                $resultado = $a / $b;
                break;

            case "porcentaje":
                $resultado = ($a * $b) / 100;
                break;

            default:
                return "Operación inválida";
        }

        $this->historial[] = "$a $operacion $b = $resultado";

        return $resultado;
    }

    public function obtenerHistorial() {
        return $this->historial;
    }

    public function borrarHistorial() {
        $this->historial = [];
    }
}