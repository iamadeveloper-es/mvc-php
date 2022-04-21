<?php 

class DbConnection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $db = "schedule_control";
    private $conn = "root";

    public function __construct(){

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "Connected successfully";
    }
}

?>