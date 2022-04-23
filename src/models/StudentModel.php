<?php 


class StudentModel{
    private $mysqli;
    private $student = array();

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    
    public function getStudentData(){

        /* $sql = "SELECT username as username, 'false' as IsAdmin FROM students 
        WHERE email = '$email' AND pass = '$pass' UNION ALL SELECT 
        username as username, 'true' as IsAdmin FROM users_admin WHERE 
        email = '$email' AND password = '$pass'";
        
        $results = $this->mysqli->getConnection()->query($sql);

        if ($results->num_rows > 0) {
            
            while($row = $results->fetch_assoc()) {
                $this->user['username'] = $row["username"];
                $this->user['IsAdmin'] = $row["IsAdmin"];
            }
        } */
    }

    /**
     * Devuelve el estudiante obtenido trás la consulta
     */
    public function getStudent(){
        return $this->student;
    }
}

?>