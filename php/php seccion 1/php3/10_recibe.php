<?php

$numero = $_POST["numero1"];
$numero2=0;

while ($numero2 <= 20)//mientras que eso sea cierto se da vueltas
{
    $mul=$numero * $numero2;
    echo "$numero * $numero2 = $mul <br>";
    $numero2 ++;
}

?>