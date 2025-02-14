<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

while ($numero2 != 0) {
    $resto = $numero1 % $numero2;
    $numero1 = $numero2;
    $numero2 = $resto;
}

echo "El MCD es: " . $numero1;
?>
