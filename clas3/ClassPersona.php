<?php 
    //Esta es una super clase por que hereda a las demás clases
     abstract class Persona{
        public $intDPI;
        public $strNombre;
        public $intEdad;
        public $strMensaje;

        function __construct(int $DPI, string $nombre, int $edad){
            $this->intDPI = $DPI;
            $this->strNombre = $nombre;
            $this->intEdad= $edad;
        }

        abstract public function getDatosPersonales();//Este es el métood abstracto, también debe de serlo la clase
        abstract public function setMensaje(string $mensaje);
        abstract public function getMensaje():string;
    }//FIn de la clase Persona

?>