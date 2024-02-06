<?php 

    require_once ("ClassOperacion.php"); /*Usamos required_once en lugar de include por que si existen errores, 
                                            este para hasta donde está el error y con include no, continua el proceso*/
    
    
    $operacion = new Operations(10,2); //Creamos el objeto para poder pasar los parámetros de este mismo
    $operacion2 = new Operations(15,2);

    $totalSuma= $operacion->getSuma(); //Mandamos llamar al método suma pasando los parámetros del objeto creado
    $totalResta= $operacion2->getResta();

    echo $totalSuma;
    echo $totalResta;

?>