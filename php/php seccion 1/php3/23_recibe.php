<?php
$Fahrenheit = $_POST["numero1"];


if ($Fahrenheit < 999) {
        $resta=$Fahrenheit  - 20; // resta de parentesis
        $multiplicacion= $resta * 5;
        $division = $multiplicacion / 9 ;
        echo "son $division grados Celsius";
        //sleep(5);
        header("refresh: 5, url = 23.php");
    }

?>
