<?php

class Persona{
    public $nombre, $edad;
    public $apellido1, $apellido2;

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function setApellidos($apellido1, $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
    
    public function getApellidos(){
        return $this->apellido1." ".$this->apellido2;
    }
}

class Peruano extends Persona{
    public $departamento, $ciudad;

    //sobreescritura de metodo setApellidos() predomina la sobreescritura de este metodo
    public function setApellidos($apellido1, $apellido2){
        $this->apellido1 = $apellido2;
        $this->apellido2 =$apellido1;
    }
}

class Chileno extends Persona{
    public $comuna, $region;

    //Extendiendo metodos
    public function setApellidos($apellido1, $apellido2){
        //parent es una palabra reservado para no sobreescribir el metodo sino para extender
        //la funcionalidad de un metodo padre
        parent::setApellidos($apellido1, $apellido2);
        echo "Los apellidos se asignaron correctamente <br>";
    }
}