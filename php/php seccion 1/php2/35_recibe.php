<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

$trimestre1 = $numero1 * 0.20;
$trimestre2 = $numero2 * 0.50;
$trimestre3 = $numero3 * 0.30;
$fNota = $trimestre1 + $trimestre2 + $trimestre3;
echo "La nota final es de $fNota";
?>