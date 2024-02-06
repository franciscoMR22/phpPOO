<?php 

    trait Almacen{
        public $strProducto;
        public $fltPrecio;
        public $intStock;

        public function setAlmacen(string $producto,float $precio,int $stock){
            $this->strProducto=$producto;
            $this->fltPrecio=$precio;
            $this->intStock=$stock;
        }

        public function getAlmacen():string{
            $strInfo="
                Producto: {$this->strProducto}</br>
                Precio: {$this->fltPrecio}</br>
                Stock: {$this->intStock}</br>
            ";
            return $strInfo;
        }
        public function setStock(int $cantidad){
            $this->intStock = $this->intStock - $cantidad;
        }
    }

?>