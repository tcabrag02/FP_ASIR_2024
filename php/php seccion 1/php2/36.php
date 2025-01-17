<?php
$numero=0;

while ($numero <= 9)
{
 if ($numero > 0){
    $naturales=$numero * $numero;
    echo "$numero * $numero = $naturales";
    echo "<br>";
    $numero ++;

 } else{
    $numero++;
 }

}
?>