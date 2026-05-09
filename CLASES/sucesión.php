<?php

class sucesion {

    public function fibonacci($n) {

        $resultado = [];

        if ($n <= 0) return $resultado;

        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $resultado[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $resultado;
    }

    public function factorial($n) {

        $resultado = [];
        $factorial = 1;

        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
            $resultado[] = $factorial;
        }

        return $resultado;
    }
}