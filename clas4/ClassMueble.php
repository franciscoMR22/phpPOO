<?php 
    require_once("ClassProducto.php");

    class Mueble extends Producto{
        public $strColor;
        public $strMaterial;
        public $strStatus= "Agotado";

        public function __construct(string $descripcion, float $precio, string $color, string $material){
            parent::__construct($descripcion,$precio);

            $this->strColor= $color;
            $this->strMaterial= $material;
        }

        public function getInfoProducto(){
            $arrProducto = array(
                'producto'=>$this->strDescripcion,
                'precio'=>$this->flPrecio,
                'stock_minimo'=>$this->intStockMinimo,
                'estado'=>$this->strStatus,
                'color'=>$this->strColor,
                'material'=>$this->strMaterial //A esto se le llama redefinir un método, agregar en la sub clase mas atributos
            );
            return $arrProducto;
        }
    }


?>