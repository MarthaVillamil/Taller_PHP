<?php

class Nodo {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

class ArbolBinario {
    public function construir($preorden, $inorden) {

        if (empty($preorden) || empty($inorden)) {
            return null;
        }

        $raizValor = array_shift($preorden);
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $inorden);

        if ($indice === false) {
            return null;
        }

        $inIzq = array_slice($inorden, 0, $indice);
        $inDer = array_slice($inorden, $indice + 1);
        $preIzq = [];
        $preDer = [];

        foreach ($preorden as $valor) {
            if (in_array($valor, $inIzq)) {
                $preIzq[] = $valor;
            } else {
                $preDer[] = $valor;
            }
        }

        $raiz->izquierda = $this->construir($preIzq, $inIzq);
        $raiz->derecha = $this->construir($preDer, $inDer);

        return $raiz;
    }
    public function recorridoPostorden($nodo, &$resultado = []) {
        if ($nodo != null) {
            $this->recorridoPostorden($nodo->izquierda, $resultado);
            $this->recorridoPostorden($nodo->derecha, $resultado);
            $resultado[] = $nodo->valor;
        }
        return $resultado;
    }
    public function mostrarEstructura($nodo, $nivel = 0) {

        if ($nodo == null) {
            return "";
        }

        $espacios = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $nivel);
        $resultado = $espacios . $nodo->valor . "<br>";

        $resultado .= $this->mostrarEstructura($nodo->izquierda, $nivel + 1);
        $resultado .= $this->mostrarEstructura($nodo->derecha, $nivel + 1);

        return $resultado;
    }
}