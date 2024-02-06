<?php 
    require_once("autload.php");
    //require_once ("ClassEmpleado.php");
    //require_once ("ClassCliente.php");
    $objEmpleado = new Empleado(121212,"Andresz Gonzales",25);
    $objEmpleado->setPuesto("Administrador");

    $objCliente = new Cliente(123456,"Carlos Hernandez",23);
    $objCliente->setCredito(1000);

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto ".$objEmpleado->getPuesto()."<br/><br/><br/>";
    echo "DATOS DEL CLIENTE ASIGNADO";
    echo $objCliente->getDatosPersonales();
    echo "Credito: ".$objCliente->getCredito();




?>