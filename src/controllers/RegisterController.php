<?php 



class RegisterController{
    private $title;
    private $model;
    private $view;
    private $status;
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
     * Método que valida el formulario de registro y
     * envía los datos al modelo
     */
    public function doRegister(){
        $name = $_POST["new-name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $nif = $_POST["nif"];
        $email = $_POST["e-mail"];
        $pass = $_POST["pass"];
        $passRepeat = $_POST["repeat-pass"];

        if($name == ''){
            $this->errors['error-name'] = "Name is required";
        }
        if($surname == ''){
            $this->errors['error-surname'] = "Surname is required";
        }
        if($username == ''){
            $this->errors['error-username'] = "Username is required";
        }
        if($phone == ''){
            $this->errors['error-phone'] = "Phone is required";
        }
        if($nif == ''){
            $this->errors['error-nif'] = "Nif is required";
        }
        if($email == ''){
            $this->errors['error-email'] = "Email is required";
        }
        if($pass == ''){
            $this->errors['error-pass'] = "Password is required";
        }
        if($passRepeat == ''){
            $this->errors['error-repeat-pass'] = "Please repeat the password";
        }
        elseif($pass != '' && $passRepeat != '' && $pass != $passRepeat){
            $this->errors['error-not-equal'] = "The passwords doesn't match";
        }

        //print_r(count($this->errors));

        if(count($this->errors) == 0){
            $result = $this->model->register($username, $pass, $email, $name, $surname, $phone, $nif);
            if($result){
                $this->status = true;
            }
            else{
                $this->status = false;
            }
        }

        require_once "src/views/registerView.php";

    }

}
?>
