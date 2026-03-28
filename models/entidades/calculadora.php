<?php

class Calculadora
{
    public function calcular($numero1, $numero2, $operacion)
    {
        if ($operacion == "sumar") {
            return $numero1 + $numero2;
        }

        if ($operacion == "restar") {
            return $numero1 - $numero2;
        }

        if ($operacion == "multiplicar") {
            return $numero1 * $numero2;
        }

        if ($operacion == "dividir") {
            if ($numero2 != 0) {
                return $numero1 / $numero2;
            } else {
                return "No se puede dividir entre cero";
            }
        }

        if ($operacion == "porcentaje") {
            return ($numero1 * $numero2) / 100;
        }
    }

    public function obtenerSimbolo($operacion)
    {
        if ($operacion == "sumar") {
            return "+";
        }

        if ($operacion == "restar") {
            return "-";
        }

        if ($operacion == "multiplicar") {
            return "*";
        }

        if ($operacion == "dividir") {
            return "/";
        }

        if ($operacion == "porcentaje") {
            return "% de";
        }
    }
}