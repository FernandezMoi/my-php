<?php
/*
 TIPOS DE DATOS:
 int : 99
 float : 3,14
 string : "Hola test"
 bool : true/false
 null
 Array (Colección de datos)
 Object
*/
$numero = 321;
$numero2 = 3.21;
$text = "Texto";
echo gettype($numero);
echo "<br>";
echo gettype($numero2);
echo "<br>";
echo gettype($text);
echo "<br>";

echo "Soy un tipo \"$numero\" ";
//Debuggear
$mi_nombre[] = "Moises";
$mi_nombre[] = "Moises";
var_dump($mi_nombre);
