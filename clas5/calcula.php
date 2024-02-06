<?php 
    require_once("ClassOperacion.php");

    $objRaiz= new Calcular(); //Podemos dejar vacio el campo , ya que no creamos un cosntructor 
    echo $objRaiz->raizCuadrada(9)."</br>"; //Los parametros se pasan directo al método para que pueda usarlos 
    echo $objRaiz->potencia(5,4)."</br>";

    echo $objRaiz->op_basicas(5,5,"+");

?>