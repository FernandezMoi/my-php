<?php

if ($_COOKIE['miCookie']) {
    unset($_COOKIE['miCookie']); //No la quita, hay que caducar la cookie
    setcookie('miCookie', '', time() - 100);
}

header('Location: ver_cookies.php');
