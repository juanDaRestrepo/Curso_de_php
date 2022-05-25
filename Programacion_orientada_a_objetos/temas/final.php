<?php
//La palabra final es para evitar que la clase
//definida pueda ser heredada y tambien evita que mis metodos puedan ser sobreescritos

class Hogar{
    //Al definir el metodo con esta palabra reservada evito que pueda ser sobreescrito
    //En las clases que extendiendan a esta
    final public function saludar(){
        echo "Hola desde un metodo que no puede ser sobreescrito";
    }
}

class Departamento extends Hogar{
    /* Por eso aca no puedo hacer lo siguiente:
    public function saludar(){

    } */
}