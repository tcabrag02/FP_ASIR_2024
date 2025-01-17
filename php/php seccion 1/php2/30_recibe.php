<?php
$nHoras = $_POST["numero1"];
$precioHora = $_POST["numero2"];
//Si la cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50% para las horas extras
$salario = 0;
$sExtra = 0;
//echo salario
if($nHoras > 40)
{
  $hExtra=$nHoras - 40;//calculamos el total de horas extras
  $nHoras = $nHoras - $hExtra;//ajustamos las horas a 40
  $tExtra=$precioHora + 0.5*$precioHora;// calculamos la ganancia extra por hora
  $sExtra=$hExtra * $tExtra;//calculamos el salario extra
}
//El salario siempre se calcula igual, salario de 40horas por dinero hora
//Extra si hay más de 40 horas, es decir, si hay 41  solamente 1 sería extra
$salario=$nHoras * $precioHora+$sExtra;
echo "Su sarario es de  $salario";
?>
