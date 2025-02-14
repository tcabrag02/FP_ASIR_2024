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

$numero = array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8,$numero9,$numero10);

for($i = 0; $i < sizeof($numero); $i++){
    $division3 = $numero[$i] / 3; //recorre la rai de $numero y lo divides por 3
    if($numero[$i] % 3 == 0)//s iel resto es cero es divisible
        $division3++;//Si es divisible, sumamos uno al número de divisores de 3
    $division5 = $numero[$i] / 5; //recorre la rai de $numero y lo divides por 5
    if($numero[$i] % 3 == 0)//s iel resto es cero es divisible
        $division3++;//Si es divisible, sumamos uno al número de divisores de 5
    if()
}

for(($i = 0; $i < sizeof($notas); $i++)){

}
