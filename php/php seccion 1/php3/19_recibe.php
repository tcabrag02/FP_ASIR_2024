<?php
$numero1 = $_POST["numero1"];

if ($numero1 < 14) {
    echo "Infancia";
} elseif ($numero1 >= 14 && $numero1 <= 26) {
    echo "Juventud";
} elseif ($numero1 >= 27 && $numero1 <= 59) {
    echo "Adultez";
} else {
    echo "Mayores";
}
?>
