<?php 
    require_once("ClassMueble.php");

    final class Mesa extends Mueble{ //final no permite heredar a otras clases

        private $strForma="";
        protected $strTamanio;
        public $strStatus="Activo";

        public function __construct(string $descripcion, float $precio, string $color, string $material,string $tamanio){
            parent::__construct($descripcion,$precio,$color,$material);

            $this->strTamanio=$tamanio;
        }

        public function setForma(string $forma){$this->strForma=$forma;} //No se utiliza el metodo GET por que en el array ya se esta realizando esa acción

        public function getInfoProducto(){
            $arrProducto = array(
                'producto'=>$this->strDescripcion,
                'precio'=>$this->flPrecio,
                'stock_minimo'=>$this->intStockMinimo,
                'estado'=>$this->strStatus,
                'material'=>$this->strMaterial,
                'color'=>$this->strColor,//A esto se le llama redefinir un método, agregar en la sub clase mas atributos
                'tamaño'=>$this->strTamanio,
                'forma'=>$this->strForma
            );
            return $arrProducto;
    }
}

?>