<?php

/*
Ejercicio 3. 
Hacer interfaz de usuario (con form) con dos inputs y 4 botones de operaciones básicas
*/

if (!empty($_POST['n1']) && !empty($_POST['n2'])) {

    $resultado = false;

    if (isset($_POST['sumar'])) {
        $resultado = ($_POST['n1'] + $_POST['n2']);
    }
    if (isset($_POST['restar'])) {
        $resultado = ($_POST['n1'] - $_POST['n2']);
    }
    if (isset($_POST['multiplicar'])) {
        $resultado = ($_POST['n1'] * $_POST['n2']);
    }
    if (isset($_POST['dividir'])) {
        $resultado = ($_POST['n1'] / $_POST['n2']);
    }
} else {
    echo "Hay que rellenar los dos campos de númerosdxcv";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 3</title>
</head>

<body>
    <h1>Calculadora en PHP</h1>
    <form action="" method="POST">

        <label for="n1">Number 1</label>
        <input type="number" name="n1" id="">
        <br>
        <label for="n2">Number 2</label>
        <input type="number" name="n2" id="">
        <br>
        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>
    <h2>El resultado es:</h2>
    <?php
    if (isset($resultado) && $resultado != false) :
        echo $resultado;
    else :
        echo "Introdusdfce los númerodss:";
    endif;
    ?>
</body>

</html>
