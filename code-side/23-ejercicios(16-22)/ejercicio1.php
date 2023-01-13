<?php

/*
Ejercicio 1.Crear una sesión que aumente su valor en función del parametro "get counter"
 = 1 o = 0
*/

//iniciar sesión
session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION['numero'] = 0;
}
if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}
if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}
?>

<a href="ejercicio1.php?counter=1">Aumentar counterr</a>
<a href="ejercicio1.php?counter=0">Disminuir counter</a>

<h1>Este es el valor de la sesión<?= $_SESSION['numero'] ?></h1>