<?php 


class AdminModel{
    private $mysqli;
    private $admin = array();
    public $sqlMssg;

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

    public function delete($table, $field, $id){
        $sql = "DELETE FROM $table WHERE $field = '$id'";

        $results = $this->mysqli->getConnection()->query($sql);

        if ($results === TRUE) {
            $this->sqlMssg = "Item deleted successfully";
        }
        else {
            $this->msg = "Error deletting record: " . $this->mysqli->error;
        }
        
    }
}

?>