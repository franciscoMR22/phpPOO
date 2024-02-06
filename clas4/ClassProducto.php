<?php 

    class Producto{
        public $strDescripcion;
        public $flPrecio;
        protected $intStockMinimo =10;
        protected $strStatus = "Activo";

        function __construct(string $descripcion, float $precio){
            $this->strDescripcion = $descripcion;
            $this->flPrecio = $precio;
        }

        public function getInfoProducto(){
            $arrProducto = array(
                'producto'=>$this->strDescripcion,
                'precio'=>$this->flPrecio,
                'stock_minimo'=>$this->intStockMinimo,
                'estado'=>$this->strStatus
            );
            return $arrProducto;
        }
    }//Fin de la clase

?>