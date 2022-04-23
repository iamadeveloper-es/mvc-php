<?php

    function hasSession(){
        //Iniciamos la sesión
        session_start();
        /**
         * Esta función debe estar en todas 
         * las páginas que queramos protejer
         * leer si NO hay algo llamado user en la sesión,
         * con empty comprobamos si está vacío
         */
        if (empty($_SESSION["user"])) {
            // si está vacio Lo redireccionamos al login
            header("Location: http://localhost/mvc-php/index.php");
            // Y salimos del script
            exit();
        }
    }

?>