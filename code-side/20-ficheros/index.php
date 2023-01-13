<?php

//abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
/*while (!feof($archivo)) {
    $content = fgets($archivo);
    echo $content . "<br/>";
}

//Escribir
fwrite($archivo, "<br/>*Texto escrito de función");

//Cerrar archivo
fclose($archivo);
*/

//copiar fichero
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error la copiar");

//Renombrar fichero
//rename('fichero_renombrado', 'fichero_renombrado.txt');

//Eliminar
//unlink('fichero_renombrado.txt') or die("Error al borrar");

//Comprobar existencia

if (file_exists("fichero_texto.txt")) {
    echo "Fichero existe!!";
} else {
    echo "NO EXISTE";
}
