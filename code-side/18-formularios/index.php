<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form en PHP</title>
</head>

<body>
    <H1>Formulario</H1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" autofocus="autofocus" minlength="2"></p>
        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" disabled value="Fdez"></p>
        <label for="edad">Edad:</label>
        <p><input type="number" name="number" required placeholder="tu edad"></p>
        <label for="ciudad">Ciudad:</label>
        <p><input type="ciudad" name="ciudad" pattern="[A-Z]+"></p>

        <label for="boton">Botón:</label>
        <p><input type="button" name="boton" value="pulsar"></p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre <input type="checkbox" name="sexo" value="hombre" checked="checked">
            Mujer <input type="checkbox" name="sexo" value="mujer">
        </p>

        <label for="color">Color:</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Email:</label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente:</label>
        <p>
            Europa <input type="radio" name="continente" value="Europa" checked="checked">
            America <input type="radio" name="continente" value="America">
            Asia <input type="radio" name="continente" value="Asia">
        </p>

        <textarea name="" id="" cols="30" rows="10"></textarea><br>

        Peliculas:
        <select name="peliculas">
            <option value="Batman">Batman</option>
            <option value="Flash">Flash</option>
            <option value="Arrow">Arrow</option>
        </select>
        <br>

        <input type="submit" value="enviar">
    </form>
</body>

</html>