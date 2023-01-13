<?php


if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    echo "El título es " . $_POST['titulo'] . " y se describe como " . $_POST['descripcion'] . "";
} else {
    echo "No vars";
}
