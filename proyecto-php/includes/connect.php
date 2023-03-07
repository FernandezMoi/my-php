<?php

$server = 'localhost';
$username = 'root';
$database = 'blog';
$password = '';


$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

session_start();
