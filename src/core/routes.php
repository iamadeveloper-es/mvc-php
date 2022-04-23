<?php

    function loadController($controller){

        $controllerName = ucwords($controller)."Controller";
        $controllerFile = 'src/controllers/'.ucwords($controllerName).'.php';
    
        if(!is_file($controllerFile)){
            $controllerFile = 'src/controllers/'.MAIN_CONTROLLER.'.php';
        }
        
        require_once $controllerFile;
        $control = new $controllerName();
        return $control;
    }

    function loadAction($controller, $action){
        if(isset($_GET['a']) && method_exists($controller, $action)){
            $controller->$action();
        }
        else{
            $action = MAIN_ACTION;
            $controller->$action();
        }
    }

?>