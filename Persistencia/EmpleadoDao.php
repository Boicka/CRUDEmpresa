<?php

class EmpleadoDao {
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'empresa';

    private function conectar(){
        $mysqli = new mysqli($this->server,
                            $this->user,
                            $this->pass,
                            $this->password,
                            $this->db);
                return $mysqli;
    }
}

?>