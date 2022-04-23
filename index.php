<?php
    require_once 'src/config/config.php';
    require_once 'src/core/routes.php';
    require_once 'src/config/DBConnection.php';
    require_once 'src/controllers/LoginController.php';
    
    if(isset($_GET['c'])){
        
        $controller = loadController($_GET['c']);
        
        //echo " c true ";
        
        if(isset($_GET['a'])){
            //echo " a true ";
            loadAction($controller, $_GET['a']);
        }
        else{

            loadAction($controller, MAIN_ACTION);
        }
    }
    else{
        $controller = loadController(MAIN_CONTROLLER);
        
        $action = MAIN_ACTION;
        $controller->$action();
    }
?>