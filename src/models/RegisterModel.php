<?php 


class RegisterModel{
    private $mysqli;

    public function __construct(){
        $this->mysqli = new DbConnection();
    }

    /**
     * Método para registrar usuarios en la BBDD
     */
    public function register(){
        //TODO: lógica de registro de usuario
    }
}

?>