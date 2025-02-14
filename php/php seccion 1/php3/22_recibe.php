<?php
$n = $_POST["numero1"];
$factorial = 1;

while ($n >= 1) {
    $factorial *= $n;
    $n--;
}

echo "El factorial es $factorial";
?>
