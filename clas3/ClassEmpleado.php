<?php 
//Esta es una subclase por que le heredan
    require_once ("ClassPersona.php");//Incluye el archivo de la clase a este archivo

    class Empleado extends Persona{ //Hereda las caracteristicas de la clase

        protected $strPuesto;

        function __construct(int $DPI, string $nombre, int $edad){ //Tenemos que incluir las variables de la clase heredada para poder usarlas
            parent::__construct($DPI, $nombre, $edad);//Indica que las variables son heredadas 
        }

        public function setPuesto(string $puesto){$this->strPuesto = $puesto;}
        public function getPuesto():string{return $this->strPuesto;}

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
    }


?>