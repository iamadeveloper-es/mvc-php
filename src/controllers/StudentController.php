<?php 
include("src/helpers/session.php");
hasSession();


class StudentController{
    private $title;
    private $model;


    public function __construct(){
        require_once "src/models/StudentModel.php";
        $this->model = new StudentModel();
    }

    public function index(){
        $this->title = "Student Panel";
        require_once "src/views/studentPanelView.php";
    }

}
?>
