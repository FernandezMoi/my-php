<?php

// CONDICIONALES
/*
if(condicion){
    instrucciones
}else{
    otras instruucciones
}

//OPERADORES DE COMPARACION
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

//OPERADORES LÓGICOS
&& AND / Y
||  OR / O
! NOT / NO
and,or 
*/

// EJEMPLO 1
$color = "rojo";

if ($color == "rojo") {
    echo "EL COLOR ES ROJO";
} else {
    echo "El color no es rojoss";
}
echo "<br>";
echo "<hr>";
echo "<br>";
// EJEMPLO 2
$year = 2019;

if ($year != 2019) {
    echo 'Es distinto a 2019';
} else {
    echo "Es igual a 2019";
}

echo "<br>";
echo "<hr>";

// EJEMPLO 3

$nombre  = "Moises Fdez";
$edad = 18;
$mayoria_edad = 18;
$city = "Sevilla";
$continente = "Asia";

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == "Europa") {
        echo "y vive en $city";
    } else {
        echo "y NO vive en $city";
    }
} else {
    echo "<h1>$nombre NO es mayor de edad</h1>";
}

echo "<hr>";
echo "<br>";
echo 'Con bucle if es: ';
// EJEMPLO 4
$dia = 3;

if ($dia == 1) {
    echo "LUNES";
} elseif ($dia == 2) {
    echo "MARTES";
} elseif ($dia == 3) {
    echo "MIERCOLES";
} elseif ($dia == 4) {
    echo "JUEVES";
} elseif ($dia == 5) {
    echo "VIERNES";
} else {
    echo "es Fin de SEMANA";
}
echo "<br>";
echo 'Y con bucle switch es:';
$dia = 4;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "<h1>MIERCOLES</h1>";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "es Fin de SEMANA";
        break;
}

echo "<br>";
echo "<hr>";

// EJEMPLO 5
$edad = 18;
$edad2 = 67;
$edad_oficial = 17;

if ($edad_oficial >= $edad && $edad_oficial <= $edad2) {
    echo '<h1>Puede trabajar</h1>';
} else {
    echo '<h1>NO PUEDE TRABAJAR</h1>';
}

$pais = "Mexico";

if ($pais == "Mexico" || $pais = "España" || $pais = "Argentina") {
    echo 'Y en su pais se habla Español';
} else {
    echo 'Y en su pais NO se habla Español';
}
echo "<br>";
echo "<hr>";
echo "<br>";
// EJEMPLO 5

//GOTO
//goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

//marca:
echo "Me he saltado las instrucciones";
