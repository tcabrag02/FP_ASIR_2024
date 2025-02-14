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

$notas = array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8,$numero9,$numero10);

for($i=0; $i<sizeof($notas); $i++){
    if ($notas[$i] >7){
        echo "La nota:" . $notas[$i] . " es mayor a 7";
    }elseif($notas[$i] = 7){
        echo "La nota es" .  $nota[$i]. "igual a 7";
    }else {
        echo "La " . $notas[$i] . "es menor a 7";
    }

}