<?php
    $nombre = $_REQUEST['name'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['rol'];

    //Para recibir imagenes y guaradarlas en cierta ruta
    $image = $_FILES['image'];
    $patch = $_SERVER['DOCUMENT_ROOT']."/bases_de_php/imagenes/".$image['name'];

    echo "$nombre tiene $edad años, su sexo es $sexo y sus roles son: ";

    echo "<ul>";
     foreach($roles as $rol ){
        echo "<li>$rol</li>";
     };
    echo "</ul>";

    var_dump($patch);
     move_uploaded_file($image['tmp_name'], $patch);