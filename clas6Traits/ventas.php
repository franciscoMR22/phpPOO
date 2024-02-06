<?php
    require_once("ClassTienda.php");

    $objtProducto = new Tienda(); //La documentación de PHP indica que no se pueden instanciar, ya que no son objetos como tal, solo sirven para reutilizar código en clases independientes 
    $objtProducto->setAlmacen("Monitor",2000,10);

    echo $objtProducto->getAlmacen(). "</br></br></br>";

    $objtProducto->setCarrito("Monitor",4);
    $objtProducto->setStock(4);
    echo "<h1>Almacen actualizado</h1>";
    echo "<hr>";
    echo $objtProducto->getAlmacen()."</br></br></br>";
    echo "<h1>Tu Carrito</h1>";
    echo "<hr>";
    echo $objtProducto->getCarrito();
?>