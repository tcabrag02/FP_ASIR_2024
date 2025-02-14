<?php

$Figura = $_POST["figura"];
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];


if($Figura=='+'){
    $suma=$numero1 + $numero2;
    echo "la suma es $suma";
}elseif ($Figura=='*') {
    $multiplicacion=$numero1 * $numero2;
    echo "la multiplicacion es $multiplicacion";
}elseif ($Figura == '-'){
    $resta = $numero1 - $numero2;
     echo "La resta es  $resta";

}else{
    if ($numero2 != 0) {
        $division = $numero1 / $numero2;
        echo "El resultado de la división es $division";
    } else {
        echo "Error: No se puede dividir por cero.";
    }
}
?>