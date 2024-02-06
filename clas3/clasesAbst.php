<?php 

    require_once("ClassEmpleado.php");

    $objEmpleado = new Empleado(123456,"Pablo Perez",23);
    $objEmpleado->setPuesto("Administrador");
    $objEmpleado->setMensaje("</br>Hola");
    $objeto= $objEmpleado->getDatosPersonales();



    echo $objEmpleado->getMensaje()."</br>";
    echo "Puesto: ".$objEmpleado->getPuesto();
    echo $objeto;


?>