<?php 
include("src/helpers/server-functions.php");
//print(serverURL());
class LoginController{
    private $title;
    private $model;
    private $view;
    private $errors = array();

    /**
     * Constructor del LoginController
     * Al hacer un new LoginController se requiere el modelo,
     * se hace una nueva instancia de este para que esté disponible
     * en toda la clase, también se asigna valor a la variable title
     * que será el título de la sección
     */
    public function __construct(){
        require_once "src/models/LoginModel.php";
        $this->model = new LoginModel();
        $this->title = "Login";
    }

    /**
     * Método que se ejecuta siempre si el controlador se llama
     * sin especificar método
     * Aquí se podrán ejecutar acciones para traer datos por ejemplo
     */
    public function index(){
        
        require_once "src/views/loginView.php";
    }

    /**
     * Método que valida el formulario de login y
     * envía los datos al modelo y los recibe de vuelta
     */
    public function doLogin(){
        $email = $_POST["e-mail"];
        $pass = $_POST["pass"];

        if(isset($email) && $email != '' && isset($pass) && $pass != ''){

            $this->model->login($email, $pass);
            $user = $this->model->getUser();

            if(count($user) == 0){
                return $this->errors[] = "User was not found";
            }
            else {
                if($user['IsAdmin'] === 'true'){
                    //ADMINISTRADOR
                    //iniciamos sesión
                    session_start();

                    //guardamos el valor de la sesión para un admin
                    $_SESSION["admin"] = array();
                    $_SESSION["admin"]["username"] = $user['username'];
                    $_SESSION["admin"]["email"] = $user['email'];
                    $_SESSION["admin"]["IsAdmin"] = $user['IsAdmin'];

                    //redirigimos al usuario a las páginas secretas y protejidas
                    header('Location: '.serverURL().'/mvc-php/index.php?c=admin');
                    
                }
                if($user['IsAdmin'] === 'false'){
                    //ESTUDIANTE
                    //iniciamos sesión
                    session_start();

                    //guardamos el valor de la sesión para un estudiante
                    $_SESSION["student"] = array();
                    $_SESSION["student"]["username"] = $user['username'];
                    $_SESSION["student"]["email"] = $user['email'];
                    $_SESSION["student"]["IsAdmin"] = $user['IsAdmin'];

                    //redirigimos al usuario a las páginas secretas y protejidas
                    header('Location: '.serverURL().'/mvc-php/index.php?c=student');
                }
            }

        }else{

            //FIXME: No entra
            $this->errors[] = "All fields are required";
        }

        require_once "src/views/loginView.php";

    }
}
?>
