<?php

    /**
     * Esta función debe estar en todas 
     * las páginas de ADMIN que queramos protejer.
     * comprobamos si NO hay algo llamado user en la sesión,
     * con empty
     */
    function isAdminAuthenticated(){
        //Iniciamos la sesión
        session_start();
        
        if (empty($_SESSION["admin"])) {
            // si está vacio Lo redireccionamos al login
            header("Location: http://localhost/mvc-php/index.php");
            // Y salimos del script
            exit();
        }
    }
    /**
     * Esta función debe estar en todas 
     * las páginas de ESTUDIANTE que queramos protejer.
     * comprobamos si NO hay algo llamado user en la sesión,
     * con empty
     */
    function isStudentAuthenticated(){
        //Iniciamos la sesión
        session_start();
        
        if (empty($_SESSION["student"])) {
            // si está vacio Lo redireccionamos al login
            header("Location: http://localhost/mvc-php/index.php");
            // Y salimos del script
            exit();
        }
    }
    /**
     * Esta función nos dice solo si hay algún usuario 
     * autenticado.
     * Es util para controlar que se muestren o no ciertos elementos
     */
    function isUserAuthenticated(){
        //Comprobamos si existe alguna sesión con estos nombres
        //y devolvemos true o false
        if (!empty($_SESSION["student"]) || !empty($_SESSION["admin"])) {
            return true;
            exit();
        }
        return false;
        exit();
    }
    /**
     * Esta función nos devuelve un array con
     * la informacíon de la sesión del usuario
     */
    function sessionInfo(){
        $userInfo = null;
        if (!empty($_SESSION["student"])) {
            $userInfo = $_SESSION["student"];
            return $userInfo;
            exit();
        }
        if (!empty($_SESSION["admin"])) {
            $userInfo = $_SESSION["admin"];
            return $userInfo;
            exit();
        }
    }

?>