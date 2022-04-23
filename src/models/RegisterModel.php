<?php 


class RegisterModel{
    private $mysqli;

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    /**
     * Método para registrar usuarios en la BBDD
     */
    public function register($username, $pass, $email, $name, $surname, $phone, $nif){
        $dateTime = date('Y-m-d H:i:s');
        $sql = "INSERT INTO students (id, username, pass, email, name, surname, telephone, nif, date_registered)
        VALUES (NULL, '$username', '$pass', '$email', '$name', '$surname', '$phone', '$nif', '$dateTime')";
        
        $results = $this->mysqli->getConnection()->query($sql);

        if ($results) {
            
            return $results;
        }
        else{
            echo "Something has gone wrong! ".$this->mysqli->getConnection()->error;
        }
    }
}

?>