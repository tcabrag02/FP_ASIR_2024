<?php
$numero2 = 0;
$suma = 0; // Inicializamos la variable para la suma

while ($numero2 <= 100) { // Mientras que eso sea cierto se da vueltas
    if ($numero2 >= 1) {
        $cuadrado = $numero2 * $numero2;
        $suma += $cuadrado; // Sumamos el cuadrado al acumulador
    }
    $numero2++;
}

echo "La suma de los cuadrados de los números del 1 al 100 es: $suma";
?>
