<?php 


class LoginController{

    public function __construct(){
        // $this->validateForm();
        echo 'Hola desde login controldsfdsler<br>';
    }

    public function index(){
        include("src/models/LoginModel.php");
        $loginModel = new LoginModel();

        include("src/views/LoginView.php");
    }

    public function otroMetodo(){
        echo "hola desde otroMetodo</br>";

        include("src/views/LoginView.php");
    }

    
}
?>
