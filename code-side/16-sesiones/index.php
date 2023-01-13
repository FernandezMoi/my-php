<?php

/*
Una sesión lo que hace es almacenar y persistir datos del usuario de un sitio web
hasta que cierra la sesión o cierra el navegador
*/

//iniciar sesión
session_start();

//variable local
$variable_texto = "Soy una variable cualquiera";

//variable persistente
$_SESSION['variable_persistente'] = "Sou una variable que persiste";

echo $variable_texto . "<br/>";

echo $_SESSION['variable_persistente'];
