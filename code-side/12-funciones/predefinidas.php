<?php

//debuggear
$nombre = "Moises Fdez";
var_dump($nombre);

echo "<hr>";

// Fechas

echo date('d-m-yyy');
echo "<br>";
echo time();

echo "<hr>";
//Matemáticas

echo "Raíz cuadrada de 10 = " . sqrt(10);
echo "<br>";
echo "Número aleatorio entre 10 y 40 = " . rand(10, 40);
echo "<br>";
echo "Número pi = " . pi();
echo "<br>";
echo "Redondear = " . round(4.149323, 3);
echo "<hr>";


// Detectar tipos

echo gettype($nombre);

echo "<br>";

if (is_string($nombre)) {
    echo "Esa variables es un string";
}
echo "<br>";
if (!is_float($nombre)) {
    echo "Esa variable no es un número con decimales";
}

// Comprobación si existe
echo "<hr>";
if (isset($nombre)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

echo "<hr>";

//Limpiar espacios
$frase = "    frase con espacios   ";
var_dump(trim($frase));
echo "<hr>";
//Eliminar variables / índices

$year = 2000;
unset($year); //var_dump($year);


//Comprobar variable vacía
$texto = "  y ";
if (empty(trim($texto))) {
    echo "Variable vacía";
} else {
    echo "Tiene contenido";
}
echo "<hr>";
//Contar caracteres
$cadena = "12345";
echo strlen($cadena);

echo "<hr>";

//Encontrar carácter

$frase = "La vida es bella";
echo strpos($frase, "s");

echo "<hr>";

//Reemplazar palabras de un string
$texto = str_replace("vida", "avioneta", $frase);
echo $texto;

echo "<hr>";
// Convertir MAYUS/MINUS
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
