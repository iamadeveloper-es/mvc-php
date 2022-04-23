<?php 


class LoginModel{
    private $mysqli;
    private $user = array();

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    /**
     * Método login
     */
    public function login($email, $pass){

        $sql = "SELECT username as username, email as email, 'false' as IsAdmin 
        FROM students WHERE email = '$email' AND pass = '$pass' UNION ALL SELECT 
        username as username, email as email, 'true' as IsAdmin FROM users_admin 
        WHERE email = '$email' AND password = '$pass'";
        
        $results = $this->mysqli->getConnection()->query($sql);

        if ($results->num_rows > 0) {
            
            while($row = $results->fetch_assoc()) {
                $this->user['username'] = $row["username"];
                $this->user['IsAdmin'] = $row["IsAdmin"];
                $this->user['email'] = $row["email"];
            }
        }
    }

    /**
     * Devuelve el usuario obtenido trás la consulta
     */
    public function getUser(){
        return $this->user;
    }
}

?>