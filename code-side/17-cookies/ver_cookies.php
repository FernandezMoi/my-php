<?php

/* 
Para mostrar el valor de las cookies, se usa $_COOKIE, variable superglobal
y array asociativo
*/
if (isset($_COOKIE['miCookie'])) {

    echo $_COOKIE['miCookie'] . "<br/>";
} else {
    echo "No existe la cookie<br/>";
}

if (isset($_COOKIE['deunanyo'])) {

    echo $_COOKIE['deunanyo'] . "<br/>";
} else {
    echo "No existe la cookie deunanyo";
}

?>

<a href="crear_cookies.php">Crear las galletas</a><br>
<a href="borrar_cookies.php">Borrar las galletas</a>