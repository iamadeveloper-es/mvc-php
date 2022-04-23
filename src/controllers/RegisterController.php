<?php 



class RegisterController{
    private $title;
    private $model;
    private $view;
    private $errors = array();

    public function __construct(){
        require_once "src/models/RegisterModel.php";
        $this->model = new RegisterModel();
        $this->title = "Register";
    }

    public function index(){

        require_once "src/views/registerView.php";
    }

    /**
     * Método que valida el formulario de login y
     * envía los datos al modelo
     */
    public function doRegister(){
        $email = $_POST["e-mail"];
        $pass = $_POST["pass"];
        $passRepeat = $_POST["repeat-pass"];

        if(isset($email) && $email != '' && isset($pass) && $pass != '' && isset($passRepeat) && $passRepeat != ''){

            $this->model->register($email, $pass, $passRepeat);


        }else{

            //TODO: Controlar los errores
        }

        require_once "src/views/registerView.php";

    }

}
?>
