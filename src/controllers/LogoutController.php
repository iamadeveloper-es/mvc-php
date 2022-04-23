<?php 

//print(serverURL());
class LogoutController{
    
    public function __construct(){
        
    }

    
    public function index(){
        // Iniciar sesión, aunque la vamos a destruir, primero se debe iniciar
        session_start();
        // Después, destruirla. Eso va a eliminar todo lo que haya en $_SESSION
        session_destroy();
        // Finalmente lo redireccionamos al formulario de login
        header("Location: http://localhost/mvc-php/index.php");
        require_once "src/views/logoutView.php";
    }
}
?>
