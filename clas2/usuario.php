<?php 

    require_once ("ClassUsuario.php");

    $objUsuario = new Usuario("Francisco Mireles","fran_armur@empresa.com","Admin");
    $objClient =new Usuario("Jorge Garcia","Jorge_Gr@empresa.com","Cliente");

    echo Usuario::$strEstado;  //Imprime las variables estaticas
    /*echo $objUsuario->strNombre; Imprime variables publicas*/
    echo "<br>";
    //Imprime el método con el que accedemos a la variable privada
    echo $objUsuario->getNombre();
    echo "<br>";
    echo $objUsuario->getEmail();
    echo "<br>";
    echo $objUsuario->getRol();

    //Llamamos el método de perfil
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $objUsuario->getPerfil();
    echo "<br>";
    echo "<br>";
    echo $objClient->setCambiarClave("123456789"); //Ingresamos valor para el método set
    echo "<br>";
    echo $objClient->getPerfil();


?>