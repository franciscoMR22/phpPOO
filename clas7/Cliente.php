<?php 
    require_once("autload.php");
/*Esta es una subclase por que le heredan
    require_once ("ClassPersona.php");*/

    class Cliente extends Persona{

    protected $filCredito;

    function __constructor(int $DPI, string $nombre, int $edad){
        parent::__construct($DPI, $nombre, $edad);
    }

    function setCredito(string $credito){$this->filCredito=$credito;}
    function getCredito():string{return $this->filCredito;}
    
}


?>