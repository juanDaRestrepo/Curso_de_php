<?php
/* To explain namespaces */
/* use carpeta1\Humano;
use carpeta2\Humano as Humano2; */

/* To explain autoload */
/* use Models\Course;
use Controllers\CourseController; */

/* require_once("temas/persona.php"); */
require_once("temas/encapsulamiento.php");
require_once("temas/clasesAbstractas.php");
require_once("temas/traits.php");
require_once("carpeta1/Humano.php");
require_once("carpeta2/Humano.php");
require_once("temas/final.php");



//Esta función se ejecuta cada que instancio una clase 
// Asi es como se usa un autoload.
//Autoload:
/* spl_autoload_register(function($clase){
    if(file_exists(str_replace('\\','/', $clase).'.php')){
        require_once str_replace('\\','/', $clase).'.php';
    }
});

$course = new Course;
$courseController = new CourseController;
$course->saludo();
echo "<br>";
$courseController->saludo(); */


/* Namespaces */
/* $humano1 = new Humano2;
$humano1->saludar();
echo "<br>";
$humano = new Humano;
$humano->saludar(); */

/* Traits */
/* $peruano = new Peruano;
$peruano->saludoLatinoamericano();
echo "<br>";
$peruano->saludo(); */

/* Clases abstractas */
/* $clase1 = new ClaseConcreta;
$clase1->imprimir(); */

/* Encapsulamiento */
/* $objeto = new MyClass2;
echo $objeto->printHello(); */

/* herencia */
/* $chileno = new Chileno;
$chileno->setApellidos("Rengifo", "Flores");
$chileno->setNombre('Tulio');

echo 'Estos son los apellidos '.$chileno->getApellidos(); */