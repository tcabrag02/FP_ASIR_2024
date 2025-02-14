<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];
$numero4 = $_POST["numero4"];
$numero5 = $_POST["numero5"];
$numero6 = $_POST["numero6"];
$numero7 = $_POST["numero7"];
$numero8 = $_POST["numero8"];
$numero9 = $_POST["numero9"];
$numero10 = $_POST["numero10"];

$suma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5 + $numero6 + $numero7 + $numero8 + $numero9 + $numero10;
$division=$suma / 10;
echo "la media es $division";
?>