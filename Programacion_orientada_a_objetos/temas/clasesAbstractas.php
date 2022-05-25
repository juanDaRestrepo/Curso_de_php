<?php
//Son como las interfaces la diferencia es que estas nos permiten crear
// propiedades y metodos con encapsulamiento distintos
namespace temas;
abstract class ClaseAbstracta{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta{
    protected function getValor(){
        return "Clase concreta";
    }
    public function valorPrefijo($prefijo){
        //Logica del metodo
        return $prefijo. "clase concreta";
    } 
}

