<?php

$numero = $_POST["numero1"];
$numero2=0;
$suma = 0;
while ($numero2 <=100)//mientras que eso sea cierto se da vueltas
{
    //$suma= $suma +$numero + $numero2;
    $suma+=$numero + $numero2;
    echo "$numero + $numero2 = $suma <br>";
    $numero2 ++;
}
echo $suma;
?>