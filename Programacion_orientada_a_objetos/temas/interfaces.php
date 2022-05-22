<?php

//Obligar a clases que implementen determinada interfaz 
//a usar metodos o propiedades, las interfaces tambien se pueden heredar entre ellas

/* interface iTemplate{
    public function setVariable($value);
    public function getHtml();
}

class Template implements iTemplate{
    public function setVariable($value){

    }

    public function getHtml(){

    }
} */

//herencia de interfaces sencilla
interface a{
    public function prueba();
}

interface b extends a{
    public function prueba2();
}

class c implements b{
    public function prueba(){}
    public function prueba2(){}
}

//Herencia de interfaces multiple
interface numberOne{
    public function methodOne();
}

interface numberTwo{
    public function methodTwo();
}

interface numberThree extends numberOne, numberTwo{
    public function methodThree();
}

class d implements numberThree{
    public function methodOne(){}
    public function methodTwo(){}
    public function methodThree(){}
}