<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario PHP</title>
</head>

<body>
    <H1>Validación de formulario PHP</H1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "faltan datos") {
            echo '<strong style="color:red">Faltan datos por rellenar</strong>';
        }
        if ($error == "nombre") {
            echo '<strong style="color:red">Nombre mal</strong>';
        }
        if ($error == "apellido") {
            echo '<strong style="color:red">Apellido mal</strong>';
        }
        if ($error == "edad") {
            echo '<strong style="color:red">Edad mal</strong>';
        }
        if ($error == "email") {
            echo '<strong style="color:red">Email mal</strong>';
        }
        if ($error == "pass") {
            echo '<strong style="color:red">Pass mal</strong>';
        }
    }
    ?>
    <form action="procesar_form.php" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" autofocus="autofocus" minlength="2"></p>
        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" pattern="[A-Za-z ]+"></p>
        <label for="edad">Edad:</label>
        <p><input type="number" name="edad" pattern="[0-9]+" placeholder="tu edad"></p>
        <label for="text">Email:</label>
        <p><input type="email" name="email"></p>
        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass"></p>

        <br>

        <input type="submit" value="enviar">
    </form>
</body>

</html>