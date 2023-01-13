<?php
require 'includes/cabecera.php'; //include_once si ya está incluida no incluye, 
// require para no ejecutar código si no carga el fichero.
?>

<div>
    <h2>Esta es la página de inicio</h2>
    <p>Texto de prueba de la página de inicio</p>
</div>
<?php
var_dump($nombre);
require 'includes/footer.php';
?>