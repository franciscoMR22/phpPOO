<?php 
    namespace controllers;//Indica el entorno que estamos usando (nombre de carpeta)
    require_once("../autoload.php");

    use models\Persona;//Indica la clase heredada

    class Empleado extends Persona{ //Hereda las caracteristicas de la clase

        protected $strPuesto;

        function __construct(int $DPI, string $nombre, int $edad){ //Tenemos que incluir las variables de la clase heredada para poder usarlas
            parent::__construct($DPI, $nombre, $edad);//Indica que las variables son heredadas 
        }

        public function setPuesto(string $puesto){$this->strPuesto = $puesto;}
        public function getPuesto():string{return $this->strPuesto;}
    }


?>