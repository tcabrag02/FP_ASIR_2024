<?php
$n0 = $_POST["numero"];
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

$masculino=$n1/$n0 * 100;
echo "$masculino % Alumnos\n";

echo"<br>"

$femenino=$n2/$n0 * 100;
echo "$femenino % Femenino"
?>