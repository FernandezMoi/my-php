<?php

// BUCLE FOR
/*
    for(var contador,condicion,actualiza contador){
        bloque de instrucciones
    }
*/
//EJEMPLO 1
$result = 0;

for ($i = 0; $i < 5; $i++) {
    $result += $i;
}
echo "<h1>El resultado es $result <h1>";


//EJEMPLO 2
if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for ($i = 0; $i <= 10; $i++) {

    if ($numero == 23) {
        echo "No se puede mostrar la tabla del $numero";
        break;
    }
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
