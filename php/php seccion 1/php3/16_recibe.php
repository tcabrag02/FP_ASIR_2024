<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

echo (max($numero1,$numero2,$numero3));
echo "<br>";
echo (min($numero1,$numero2,$numero3));
?>