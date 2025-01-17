<?php
$n1 = $_POST["numero1"];

$megabyte = $n1 / 1024 ;

echo "kilobyte a megabyte $n1 KB = $megabyte MB \n";
echo "<br>";
$Terabyte=$megabyte / 2048;

echo "de megabyte a Terabyte  $megabyte MB = $Terabyte TB \n";
?>
