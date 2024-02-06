<?php 
    require_once("ClassMesa.php");

    $objMueble = new Mueble("Traida desde México",5000,"Cafe","Caoba");
    $objeto=$objMueble->getInfoProducto();
    print_r("<pre>");
    print_r($objeto); //print_r nos deja ver el contenido de un array
    print_r("<pre>");


    $objMueble = new Mesa("Traida desde México",5000,"Cafe","Caoba","120x120");
    $objMueble->setForma("Cuadrada");
    $objeto=$objMueble->getInfoProducto();
    print_r("<pre>");
    print_r($objeto); //print_r nos deja ver el contenido de un array
    print_r("<pre>");
?>