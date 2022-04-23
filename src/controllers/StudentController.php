<?php 
include("src/helpers/session.php");
isStudentAuthenticated();


class StudentController{
    private $title;
    private $model;
    private $courses;


    public function __construct(){
        require_once "src/models/StudentModel.php";
        $this->model = new StudentModel();
    }

    public function index(){
        $this->title = "Student Panel";
        $this->courses = $this->model->index();
        require_once "src/views/studentPanelView.php";
    }

}
?>
