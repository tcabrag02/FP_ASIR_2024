<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST["numero3"];

if ($operacion == '+') {
    $suma = $numero1 + $numero2;
    echo "El resultado de la suma es $suma";

} elseif ($operacion == '-') {
    $resta = $numero1 - $numero2;
    echo "El resultado de la resta es $resta";

} elseif ($operacion == '*') {
    $multiplicacion = $numero1 * $numero2;
    echo "El resultado de la multiplicación es $multiplicacion";

} elseif ($operacion == '/') {
    if ($numero2 != 0) {
        $division = $numero1 / $numero2;
        echo "El resultado de la división es $division";
    } else {
        echo "Error: No se puede dividir por cero.";
    }
} else {
    echo "Error 404";
}
?>
