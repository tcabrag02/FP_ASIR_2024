<?php
$n1 = $_POST["numero1"];
$valorPI = pi();# obtenemos el valor de  pi  desde la libreria de php
//$valorPI = M_PI#constante de  PHP

$longitud = 2 * $valorPI * $n1; 

echo "Longitud de la circunferencia: $longitud metros\n";
echo "<br>";


$area=M_PI * ($n1**2);

echo"Area de la circuferencia es  $area metros cuadrado";
?>