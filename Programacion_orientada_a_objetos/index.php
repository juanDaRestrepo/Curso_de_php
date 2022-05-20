<?php

require_once("classes/persona.php");

$persona1 = new Persona('Juan Daniel', 'Restrepo', 23);

echo "El nombre de la persona 1 es ".$persona1->getNombre();