<?php 
include("src/helpers/session.php");
isAdminAuthenticated();

class AdminController{
    private $title;
    private $model;
    private $courses;
    private $student;
    private $sqlMssg;


    public function __construct(){
        require_once "src/models/AdminModel.php";
        $this->model = new AdminModel();
    }

    public function index(){
        $this->title = "Admin Panel";
        $this->courses = $this->model->index();
        require_once "src/views/adminPanelView.php";
    }

    public function deleteCourse(){
        $id = $_GET['id'];
        $table = "courses";
        $tableField = "id_course";
        if(isset($id)){
            $this->courses = $this->model->delete($table, $tableField, $id);
            $this->sqlMssg = $this->model->sqlMssg;
        }

        $this->index();
        
        require_once "src/views/adminPanelView.php";
    }

    public function createCourse(){
        $courseName = $_POST['course-name'];
        $courseDesc = $_POST['course-desc'];
        $courseStart = $_POST['course-start'];
        $courseEnd = $_POST['course-end'];
        $courseActive = $_POST['course-active'];

        echo $courseName;
        echo $courseDesc;
        echo $courseStart;
        echo $courseEnd;
        echo $courseActive;
        
        
        
        require_once "src/views/adminPanelView.php";
    }

}
?>
