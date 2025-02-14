<?php
$numero1 = $_POST["numero1"];
$numero = 1;

while ($numero < $numero1) // mientras que el número es menor que numero1
{
    if ($numero % 2 != 0) { 
        echo $numero;
        echo "<BR>";
    }
    $numero ++;
}
?>
