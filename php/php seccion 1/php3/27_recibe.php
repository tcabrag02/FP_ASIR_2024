<?php

$Figura = $_POST["figura"];
$Base = $_POST["numero1"];
$Altura = $_POST["numero2"];
$Largo = $_POST["numero3"];
$Basemayor = $_POST["numero4"];
$Basemenor = $_POST["numero5"];
$Radio = $_POST["numero6"];



if($Figura=='Trapecio'){
    $suma=$Basemayor + $Basemenor;
    $multiplicacion=$Altura * $suma;
    $area=$multiplicacion / 2;
    echo "El area de trapecio es $area";
}elseif ($Figura=='Triangulo') {
    $multiplicacion=$Base * $Altura;
    $area1=$multiplicacion /2 ;
    echo "El area de triangulo es $area1";

}elseif ($Figura == 'Cuadrado'){
    $area2 = $Lado * $Lado;
     echo "El area de cuadrado es $area2";

}elseif ($Figura == 'Rectangulo'){
    $area3=$Base * $Altura;
    echo "El area de rectangulo es $area3";

}else{
    $mul=$Radio * $Radio;
    $area4=pi() * $mul;
    echo "El area de Circulo es $area3";
}
?>