<?php

$archivo = $_FILES['archivo'];
//var_dump($archivo);
//die();

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if (
    $tipo == "image/jpg" || $tipo == "image/jpeg"
    || $tipo == "image/png" || $tipo == "image/gif"
) {
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);

    header("Refresh:3; URL=index.php");
    echo "<h1>La imagen se ha almacenado correctamente</h1>";
} else {
    header("Refresh:3; URL=index.php");
    echo "<h1>Sube una imagen en formato correcto</h1>";
}
