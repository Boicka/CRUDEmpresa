<?php
// Clase empleado
class empleado {
    //Atributos
    private $id_emp;
    private $nombre_emp;
    private $apellidos_emp;
    private $sueldo_emp;

    //Setter y getters

    public function setId($id_emp){
        $this->id_emp=$id_emp;
    }

    public function setNombre($nombre_emp){
        $this->nombre_emp=$nombre_emp;
    }

    public function setApellidos($apellidos_emp){
        $this->apellidos_emp=$apellidos_emp;
    }

    public function setSueldo($sueldo_emp){
        $this->sueldo_emp=$sueldo_emp;
    }

    public function getId(){
        return $this->id_emp;
    }

    public function getNombre(){
        return $this->nombre_emp;
    }

    public function getApellidos(){
        return $this->apellidos_emp;
    }

    public function getSueldo(){
        return $this->sueldo_emp;
    }
}
?>
