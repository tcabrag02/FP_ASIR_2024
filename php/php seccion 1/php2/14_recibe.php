<?php
$n1 = $_POST["numero1"];

$minutos = $n1 / 60 ;

echo "de segundo a minutos $n1 segundos = $minutos minutos \n";
echo "<br>";
$horas= $minutos / 60;

echo "de minutos a horas $minutos minutos = $horas horas\n"
?>
