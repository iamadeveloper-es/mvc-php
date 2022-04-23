<?php 
include("src/helpers/session.php");
isStudentAuthenticated();


class StudentProfileController{
    private $title;
    private $model;
    private $msg;
    private $student;


    public function __construct(){
        require_once "src/models/StudentProfileModel.php";
        $this->model = new StudentProfileModel();
    }

    public function index(){
        $this->title = "Student Profile";
        $this->student = $this->model->index();
        // print_r($this->student);
        require_once "src/views/studentProfileView.php";
    }

    public function doUpdate(){
        
        $userName = $_POST["username"];
        $email = $_POST["e-mail"];
        $phone= $_POST["phone"];
        $pass = $_POST["pass"];
        $passRepeat = $_POST["pass-repeat"];
        

         if(isset($userName) && $userName != '' && isset($email) && $email != '' && isset($pass) && $pass != '' && $passRepeat == $pass){
            $this->model->update($userName, $email, $pass, $phone);
            $this->msg = $this->model->msg;
            
        }
        $this->index();
        
        require_once "src/views/studentProfileView.php";
    }

}
?>
