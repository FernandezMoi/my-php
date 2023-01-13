<?php

/*
EJERCICIO No. 5
* Crear un Array con el contenido de la siguiente tabla:
* ACCIÓN         AVENTURA         DEPORTES
* GTA            ASSASINS          FIFA 2019
* CALL OF DUTY    CRASH            PES 19
* PUBG          PRINCE OF PERSIA   MOTO GP 19
*
*
* Cada fila debe ir en un fichero separado (includes).
*
*/

$juegos = array(
    'accion' => array('gta, cod, pubg'),
    'aventura' => array('ac, crash, fable'),
    'deportes' => array('fifa23, f1, motogp')
);

$categories = array_keys($juegos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de juegos</title>
</head>

<body>
    <table border="1">
        <tr>
            <?php foreach ($categories as $key) : ?>
                <th><?= $key ?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($juegos as $key) :
                foreach ($key as $value) : ?>
                    <td><?= $value ?></td>

            <?php endforeach;
            endforeach; ?>
        </tr>
    </table>
</body>

</html>