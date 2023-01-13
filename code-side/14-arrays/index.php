<?php

/*
Un array es una colección o conjunto de datos bajo un único nombre.
Para acceder a los valores se puede usar un índice (número o alfanumérico)

*/

$pelicula = "Batman";
$peliculas = array('Batman', 'Flash', 'Thor');
$cantantes = ['2pac', 'Eminem', 'Blake'];

echo $peliculas[2];
echo "<br/>";
echo $cantantes[1];

//Recorrer con for
echo "<h1>Listado de películas</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
}
echo "</ul><hr>";

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}
echo "</ul><hr>";

//Arrays asociativo

$personas = array(
    'nombre' => 'Moi',
    'apellidos' => 'Fdez',
    'edad' => 25
);

var_dump($personas);
echo "<br/>";
echo $personas['apellidos'];

echo "<br/><hr>";
//Array multidimensional

$contactos = array(
    array(
        'nombre' => 'Pepe',
        'email' => 'pepe@pepe.com'
    ),
    array(
        'nombre' => 'Jose',
        'email' => 'jose@jose.com'
    ),
    array(
        'nombre' => 'Kaiser',
        'email' => 'kaiser@kaiser.com'
    ),
);

//var_dump($contactos);

echo $contactos[1]['nombre'];
echo "<br/>";
echo $contactos[2]['email'];
echo "<br/>";

foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'] . "<br/>";
}
