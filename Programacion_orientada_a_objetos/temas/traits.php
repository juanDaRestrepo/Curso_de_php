<?php
namespace temas;
// Se usan para simular la herencia multiple ya que php nativamente 
// no tiene esta opción
//- Los traits no se pueden instanciar solo sirven para extender la funcionalidad de una clase

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
    public function saludo(){
        echo "Saludo desde la clase persona u padre";
    }
}

trait Latinoamericano{
    public function saludoLatinoamericano(){
        echo "Saludo Latinoamericano";
    }
    /*cuando creamos un metodo que se llama igual a un metodo que esta en la clase padre de donde estamos usando 
    el trait el metodo declarado en el trait sobreescribe al de el metodo padre
    */
    
    /* public function saludo(){
        echo "Este es un saludo desde el trait";
    } */
}


trait Europeo{
    public function saludoEuropeo(){
        echo "Saludo Europeo";
    }
}
trait A{
    protected function saludo(){
        echo "Hola desde el trait A";
    }
}

trait B{
    public function saludo(){
        echo "Hola desde el trait B";
    }
}
class Peruano extends Persona{
    
    /* Si usamos el mismo metodo que se declaro tanto el trait como en la clase padre
        en la clase hija este sobreescribe el metodo
    */

    /* Al querer usar tanto el trait a como el b estos tienen un metodo que se llaman igua
    por lo tanto entraran en conflicto entonces lo que hay que hacer en este caso es lo sigueinte:*/

   /*  use A, B, Latinoamericano{
        //Con esto le estamos diciendo a php que queremos usar el metodo saludo de A y no el de B
        A::saludo insteadOf B, Latinoamericano;
    } */


   
    /* public function saludo(){
        echo "Este es un saludo desde la clase peruano";
    } */
    use A, Latinoamericano{ 
        saludo as public;
        A::saludo insteadOf Latinoamericano;
    }
}

class Chileno extends Persona{  
    use Europeo;
}