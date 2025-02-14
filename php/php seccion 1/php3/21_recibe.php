<?php
   $a = $_POST["numero1"];
   $b = $_POST["numero2"];
   $c = $_POST["numero3"];

   $cuadrado=$b*$b;
   $multiplicacion= -4 *$a * $c; //dentro de la raiz
   $multiplicacion2= 2 * $a; //debajo de la division
   $sumaraiz=$cuadrado + $multiplicacion;
   $raiz=sqrt($sumaraiz);
   if($raiz < 0){
    echo "No solucion";
   } else{
    $positivo=-$b + $raiz;
    $divisionp=$positivo / $multiplicacion2;
    echo "positivo $divisionp";
    $positivo=-$b - $raiz;
    $divisionn=$positivo / $multiplicacion2;
    echo "negativo $divisionn";
   }


?>