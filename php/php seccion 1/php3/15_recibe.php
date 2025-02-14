<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if($numero1 > $numero2){
    echo "$numero1 es mas grande que $numero2";
}elseif($numero1 == $numero2){
    echo "$numero1 es igual a $numero2";
}else{
    echo "$numero1 es mas pequeño que $numero2";
}
?>