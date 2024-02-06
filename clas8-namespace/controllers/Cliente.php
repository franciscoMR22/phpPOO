<?php 
    namespace controllers;//Indica el entorno que estamos usando (nombre de carpeta)
    require_once("../autoload.php");
    
    use models\Persona;//Indica la clase heredada

    class Cliente extends Persona{

    protected $filCredito;

    function __constructor(int $DPI, string $nombre, int $edad){
        parent::__construct($DPI, $nombre, $edad);
    }

    function setCredito(string $credito){$this->filCredito=$credito;}
    function getCredito():string{return $this->filCredito;}
    
}


?>