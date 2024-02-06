<?php 
    /*Para que este archivo funcione, debemos quitar Class a cada archivo en su nombre, esa función la realiza autload */

    function autload($nombreClass){//La variable indicando que es una clase
        require_once($nombreClass.".php"); //Manda llamar los archivos indicando que es un archivo php
    }

    spl_autoload_register('autload');


    /*Nos carga automaticamente las clases sin necesidad de requerirlas al principio 
    de nuestro código, solamente busca automaticamente las clases que se estan instanciando */
?>