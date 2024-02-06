<?php 

    interface Operacion{
        public function raizCuadrada(float $numero):float;
        public function potencia(int $numero, int $potencia):int; //pasamos parámetros y :int devuelve un valor, en este caso un entero
    }

?>