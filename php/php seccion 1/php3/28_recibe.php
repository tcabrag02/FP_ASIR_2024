<?php
$Base1 = $_POST["numero1"];
$Altura1 = $_POST["numero2"];
$Base2 = $_POST["numero3"];
$Altura2 = $_POST["numero4"];

$cuenta1=$Base1 * $Altura1;
$division1=$cuenta1 / 2;
$cuenta2=$Base2 * $Altura2;
$division2=$cuenta2 / 2;

echo "El triangulo mas grande es ";
echo (max($division1,$division2));
echo "<br>";
echo "El triangulo mas pequño es  ";
echo (min($division1,$division2));
?>