<?php 

    class Operations{ //Las clases siempre inician con una mayúscula
        public $cantUno =0;
        public $cantDos=0;
        public $resultado=0;

        function __construct($cantUno,$cantDos){//Indicamos que podemos hacer uso de la variables declaradas
            $this ->cantUno = $cantUno;
            $this ->cantDos = $cantDos;
        }

        public function getSuma(){
            $this->resultado= $this->cantUno + $this->cantDos;
            return $this->resultado;
        }
        public function getResta(){
            $this->resultado= $this->cantUno - $this->cantDos;
            return $this->resultado;
        }
        public function getDivison(){
            $this->resultado= $this->cantUno / $this->cantDos;
            return $this->resultado;
        }
        public function getMultiplicacion(){
            $this->resultado= $this->cantUno * $this->cantDos;
            return $this->resultado;
        }
    }//Fin de la clase operación 

?>