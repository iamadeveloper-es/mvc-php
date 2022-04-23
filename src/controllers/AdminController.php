<?php 
include("src/helpers/session.php");
hasSession();

class AdminController{
    private $title;
    private $model;


    public function __construct(){
        require_once "src/models/AdminModel.php";
        $this->model = new AdminModel();
    }

    public function index(){
        $this->title = "Admin Panel";
        require_once "src/views/adminPanelView.php";
    }

}
?>
