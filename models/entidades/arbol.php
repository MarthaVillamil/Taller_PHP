<?php

class Nodo
{
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor)
    {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

class Arbol
{
    public function obtenerRecorrido($texto)
    {
        $texto = str_replace(" ", "", $texto);
        return explode(",", $texto);
    }

    public function construir($preorden, $inorden)
    {
        if (count($preorden) == 0 || count($inorden) == 0) {
            return null;
        }

        $raizValor = $preorden[0];
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $inorden);

        $inordenIzquierda = array_slice($inorden, 0, $indice);
        $inordenDerecha = array_slice($inorden, $indice + 1);

        $preordenIzquierda = array_slice($preorden, 1, count($inordenIzquierda));
        $preordenDerecha = array_slice($preorden, 1 + count($inordenIzquierda));

        $raiz->izquierda = $this->construir($preordenIzquierda, $inordenIzquierda);
        $raiz->derecha = $this->construir($preordenDerecha, $inordenDerecha);

        return $raiz;
    }

    public function mostrar($nodo, $nivel = 0)
    {
        if ($nodo == null) {
            return "";
        }

        $espacios = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $nivel);
        $texto = $espacios . $nodo->valor . "<br>";

        $texto = $texto . $this->mostrar($nodo->izquierda, $nivel + 1);
        $texto = $texto . $this->mostrar($nodo->derecha, $nivel + 1);

        return $texto;
    }
}