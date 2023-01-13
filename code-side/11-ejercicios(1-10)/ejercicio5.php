<?php

    /* Mostrar todos los números que existan entre dos números que lleguen por GET
*/;
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $var1 = $_GET['num1'];
    $var2 = $_GET['num2'];


    if ($var1 < $var2) {
        echo "Números entre $var1 y $var2<br>";
        for ($i = $var1 + 1; $i < $var2; $i++) {
            echo "$i<br>";
        }
    } else {
        echo "el número $var1 es mayor que el número $var2";
    }
} else {
    echo "No se enviaron variables en el formulario, introduzcalas";
?>

    <form action="" method="GET">
        <p>
            <label for="num1">Número desde:</label>
            <input type="text" name="num1" />
        </p>
        <p>
            <label for="num2">Número hasta:</label>
            <input type="text" name="num2" />
        </p>
        <input type="submit" value="enviar">
    </form>
<?php
}
