<?php

// CONSTANTES
// Es un contenedor que no puede variar

define('nombre', 'MoisesFdez');
define('web', 'Nearspartan');


echo '<h1>' . nombre . '</h1>';
echo "<br>";

echo PHP_EXTENSION_DIR;
echo "<br>";
echo __FILE__;
echo "<br>";
echo "<br>";

function holaMundo()
{
    echo __FUNCTION__;
}

holaMundo();
