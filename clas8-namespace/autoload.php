<?php

    function autload($nombreClass){//La variable indicando que es una clase
        require_once($nombreClass.".php"); //Manda llamar los archivos indicando que es un archivo php
    
    /*Si queremos ubicar donde se encuentra el archivo
        
        $url = str_replace("\\","/",$nombreClass.".php");
        echo $url;
    
    */

    }

    spl_autoload_register('autload');
?>