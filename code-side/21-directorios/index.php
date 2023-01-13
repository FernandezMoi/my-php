<?php

//Crear directorio


if (!is_dir('mi_carpeta_creada')) {
    mkdir('mi_carpeta_creada', 0777) or die('No se puede crear la carpeta');
} else {
    echo "Ya existe el directorio!<br/>";
}
echo "<hr/>";

//rmdir('mi_carpeta_creada')
echo "<h1>Contenido de la carpeta</h1>";
if ($gestor_archivos = opendir('./mi_carpeta_creada')) {

    while ($archivo = readdir($gestor_archivos)) {
        if ($archivo != '.' && $archivo != '..') {
            echo "$archivo<br/>";
        }
    }
}
