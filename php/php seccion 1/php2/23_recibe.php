<?php
$n1 = $_POST["numero1"];

$descuento = $n1 * 0.10;
$precio= $n1 - $descuento; 
echo "Precio final de producto $precio €\n";
?>