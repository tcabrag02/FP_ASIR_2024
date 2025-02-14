<?php
$numero = $_POST["numero1"];
$numero1 = $_POST["numero2"];

while ($numero <= $numero1) {
    // Supongamos que el número es primo
    $primo = 'SI';
    $contador = $numero - 1;
    while ($contador > 1) {
        if ($numero % $contador == 0) {
            // Si encontramos un número que lo divide, no es primo
            $primo = 'NO';
            // Salimos del bucle porque ya sabemos que no es primo
            break;
        }
        $contador--;
    }
    // Si sigue siendo primo, lo imprimimos
    if ($primo == 'SI') {
        echo "$numero es primo<br>";
    } else {
        echo "$numero no es primo<br>";
    }
    $numero++;
}
?>
