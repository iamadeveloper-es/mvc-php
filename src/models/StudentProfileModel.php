<?php 


class StudentProfileModel{
    public $msg;
    private $mysqli;
    private $student = array();

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    
    public function index(){
        $email = $_SESSION["student"]["email"];
        /* echo "<br> Index modelo <br>";
        print($email); */
        $sql = "SELECT * FROM students WHERE email = '$email'";
        
        $results = $this->mysqli->getConnection()->query($sql);

        if ($results->num_rows > 0) {
            
            while($row = $results->fetch_assoc()) {
                $this->student = $row;
                
            }
            //print_r($this->student);
            return $this->student;
            
        }
    }

    public function update($userName, $email, $pass, $phone){
        $sessionEmail = $_SESSION["student"]["email"];
        /* echo "<br> update 1 <br>";
        print($sessionEmail); */
        $sql = "UPDATE students SET username = '$userName', pass = '$pass', email = '$email', telephone = '$phone' WHERE email = '$sessionEmail'";
        
        $results = $this->mysqli->getConnection()->query($sql);

        if ($results === TRUE) {
            $this->msg = "Record updated successfully";
        } 
        else {
            $this->msg = "Error updating record: " . $this->mysqli->error;
        }

        $_SESSION["student"]["email"] = $email;
        $_SESSION["student"]["username"] = $userName;
        /* echo "<br> update 2 <br>";
            print($_SESSION["student"]["email"]); */
            //$this->index();
    }

    /**
     * Devuelve el estudiante obtenido trás la consulta
     */
    public function getStudent(){
        return $this->student;
    }
}

?>