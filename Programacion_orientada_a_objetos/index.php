<?php

require_once("classes/persona.php");

$chileno = new Chileno;
$chileno->setApellidos("Rengifo", "Flores");
$chileno->setNombre('Tulio');

echo 'Estos son los apellidos '.$chileno->getApellidos();