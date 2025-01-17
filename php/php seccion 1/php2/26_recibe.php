<?php
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$n3 = $_POST["numero3"];

$salario1 = $n1 + ($n1 * 0.13);
echo "El salario base del Empleado 1 es de $salario1";
echo "<br>";

$salario2 = $n2 + ($n2 * 0.13);
echo "El salario base del Empleado 2 es de $salario2";
echo "<br>";

$salario3 = $n3 + ($n3 * 0.13);
echo "El salario base del Empleado 3 es de $salario3";
echo "<br>";
?>