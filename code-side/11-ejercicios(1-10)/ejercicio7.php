<?php
/* Imprimir la tabla de multiplicar del 1 al 10 en un tabla html
*/
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $var1 = $_GET['num1'];
    $var2 = $_GET['num2'];


    if ($var1 < $var2) {
        echo "Números entre $var1 y $var2<br>";
        for ($i = $var1 + 1; $i < $var2; $i++) {
            if ($i % 2 != 0) {
                echo "$i es impar";
            }
            echo "<br>";
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
