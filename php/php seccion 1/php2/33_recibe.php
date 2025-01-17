<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

$cateto1=$numero1*$numero1;
$cateto2=$numero2*$numero2;
$suma=$cateto1 + $cateto2;
$raizcuadrada = sqrt($suma);
echo "La hipotenusa es $raizcuadrada";
?>