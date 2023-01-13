<?php

/*
Varaibles locales: Son las que se definen dentro de una función y no pueden ser usadas
fuera de ella, a no ser que devuelvan en un return.
---
Variables globales: Son las que se declaran fuera de una función y están disponibles 
dentro y fuera de las funciones.
*/

$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";

echo $frase;

function holaFrase()
{
    global $frase; //Se declara global y se puede usar sin dar error en php
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaFrase();
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

//Funciones variables

function buenasDias()
{
    return "<h1>Hola, buenos días</h1>";
}
function buenasTardes()
{
    return "<h1>Qué tal la comida</h1>";
}
function buenasNoches()
{
    return "<h1>Ya es hora de dormir, buenas noches</h1>";
}

$horario = $_GET['horario'];
$miFuncion = "buenas" . $horario;
echo $miFuncion();
