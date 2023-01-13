<?php

/*
Una cookie es un fichero que se almacena en el navegador del usuario que visita una web
con la función se recordar o rastrear el comportamiento de éste
*/

//Crear cookie
//setcookie("nombre", "Solo puede ser texto", caducidad, ruta, dominio);

//Cookie básica
setcookie("miCookie", "valor de mi galleta");

//Cookie expirable
setcookie("deunanyo", "valor de mi galleta de 365 días", time() + (60 * 60 * 24 * 365));

header('Location: ver_cookies.php');
