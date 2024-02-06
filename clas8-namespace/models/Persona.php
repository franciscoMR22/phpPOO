<?php 
    namespace models;//Indica el entorno que estamos usando (nombre de carpeta)
    //Esta es una super clase por que hereda a las demás clases
     class Persona{
        public $intDPI;
        public $strNombre;
        public $intEdad;
        public $strMensaje;

        function __construct(int $DPI, string $nombre, int $edad){
            $this->intDPI = $DPI;
            $this->strNombre = $nombre;
            $this->intEdad= $edad;
        }

        public function setMensaje(string $mensaje){$this->strMensaje=$mensaje;}
        public function getMensaje():string{return $this->strMensaje. ' '.$this->strNombre;}


        public function getDatosPersonales(){//Redefinimos el método abstracto para poder usarlo-> redefinir es escribir su cuerpo 
            $datos = " 
                <h2>DATOS PERSONALES</h2>
                DPI: {$this->intDPI}</br>
                Nombre: {$this->strNombre}</br>
                Edad: {$this->intEdad}</br>
            ";

            return $datos;
        }
    }//FIn de la clase Persona

?>