<?php

/* Recoger 2 números por GET(url) y hacer calculos simples con ellos
*/
$var1 = 0;
$var2 = 0;
if (!empty($_GET)) {
    if ($_GET['num1'] != "") {
        $var1 = $_GET['num1'];
    }

    if ($_GET['num2'] != "") {
        $var2 = $_GET['num2'];
    }

    echo "Cuentas simples con los números $var1 y $var2<br>";
    $sum = ($var1 + $var2);
    echo "-Suma: $sum<br>";
    $resto = ($var1 - $var2);
    echo "-Resta: $resto <br>";
    $producto = ($var1 * $var2);
    echo "-Multiplicación: $producto<br>";
    $cociente = ($var1 / $var2);
    echo "-División: $cociente<br>";
} else {
    echo "No se enviaron variables en el formulario, introduzcalas";
?>

    <form action="" method="GET">
        <p>
            <label for="num1">Número 1:</label>
            <input type="text" name="num1" />
        </p>
        <p>
            <label for="num2">Número 2:</label>
            <input type="text" name="num2" />
        </p>
        <input type="submit" value="enviar">
    </form>
<?php
}
