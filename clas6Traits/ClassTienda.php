<?php 
    require_once("Almacen.php");
    require_once("Carrito.php");

    class Tienda{
        use Almacen, Carrito; //Indicamos el nomrbe de los traits que vamos a utilizar
    
    public $fltTotal=0;


    public function getCarrito():string{ //Redefinición de la clase abstracta en Producto.php:15
        $this->fltTotal=$this->fltPrecio * $this->intCantidad;

        $strInfo="
        Producto: {$this->strProducto}</br>
        Precio: {$this->fltPrecio}</br>
        Cantidad: {$this->intCantidad}</br>
        Total Global (producto): {$this->fltTotal}
    ";
        return $strInfo;
    }
    }


?>