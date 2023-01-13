<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos en PHP</title>
</head>

<body>
    <H1>Subir archivos en PHP</H1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple"></p>
        <input type="submit" value="enviar">

    </form>
    <h1>Listado de imagenes</h1>
    <?php
    $gestor = opendir('./images');

    if ($gestor) :
        while (($image = readdir($gestor)) !== false) :

            if ($image != '.' && $image != '..') :
                echo "ENTRÉ EN EL DIR 2<br/>";
                echo "<img src='images/$image' width='200px'/><br/>";
            endif;
        endwhile;
    endif;
    ?>
</body>

</html>