<?php

$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
$error = mysqli_connect_errno();
if ($error) {
    echo "La conexion dio un error" . mysqli_connect_error() . "<br>";
} else {
    echo "La conexion se realizó correctamente<br>";
}

mysqli_query($conexion, "SET NAMES 'utf8'");

$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    echo $nota['titulo'] . "<br>";
    echo $nota['descripcion'] . "<br>";
}
