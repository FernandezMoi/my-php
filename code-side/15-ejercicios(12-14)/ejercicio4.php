<?php

/*
Crear script que tenga 4 variables, una de tipo array, string, int y boolean que
imprima un mensaje según el tipo que sea
*/

$tipoArray =  array(23, 32);
$tipoInt = 12;
$tipoString = "texto";
$tipoBool = true;
$script = [$tipoArray, $tipoInt, $tipoString, $tipoBool];

foreach ($script as $value) {
    switch (gettype($value)) {
        case is_int($value);
            echo "$value es <b>int</b><br/>";
            break;
        case is_string($value);
            echo "$value es un <b>string</b><br/>";
            break;
        case is_array($value);
            $value = implode("+", $value);
            echo " es un <b>array</b> con estos valores $value<br/>";
            break;
        case is_bool($value);
            echo "$value es un <b>booleano</b><br/>";
            break;
        default:
            echo "es Fin de SEMANA<br/>";
            break;
    }
}
echo "<hr>";
foreach ($script as $value) {
    switch (gettype($value)) {
        case 'integer';
            echo "$value es <b>int</b><br/>";
            break;
        case 'string';
            echo "$value es un <b>string</b><br/>";
            break;
        case 'array';
            $value = implode("+", $value);
            echo " es un <b>array</b> con estos valores $value<br/>";
            break;
        case 'boolean';
            echo "$value es un <b>booleano</b><br/>";
            break;
        default:
            echo "es Fin de SEMANA<br/>";
            break;
    }
}
