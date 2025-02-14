<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

if ($numero1 < 0) {
    $multiplicacion = $numero1 * $numero2 * $numero3;
    echo "El resultado es $multiplicacion";
} else {
    $suma = $numero1 + $numero2 + $numero3;
    echo "El resultado es $suma";
}
?>
