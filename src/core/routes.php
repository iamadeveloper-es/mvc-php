<?php

    function loadController($controller){

        $controllerName = ucwords($controller)."Controller";
        // echo $controllerName;
        $controllerFile = 'src/controllers/'.ucwords($controllerName).'.php';
        echo $controllerFile.'<br>';
        if(!is_file($controllerFile)){
            $controllerFile = 'src/controllers/'.MAIN_CONTROLLER.'.php';
        }
        
        //echo $controllerFile;
        require_once $controllerFile;
        $control = new $controllerName();
        return $control;
    }

    function loadAction($controller, $action){
        if(isset($_GET['a']) && method_exists($controller, $action)){
            // echo $controller;
            $controller->$action();
        }
        else{
            //echo 'No llega '.$controller->MAIN_ACTION().'<br>';
            $action = MAIN_ACTION;
            $controller->$action();
        }
    }

?>