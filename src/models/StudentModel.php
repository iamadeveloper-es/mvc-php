<?php 


class StudentModel{
    private $mysqli;
    private $student = array();
    private $courses = array();

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    public function index(){
        $sql = "SELECT * FROM courses";

        $results = $this->mysqli->getConnection()->query($sql);

        if ($results->num_rows > 0) {
            while($row = $results->fetch_array()) {
                $this->courses[] = $row;
            }
            return $this->courses;
            
        }
    }
}

?>