<?php
$numero = $_POST["numero1"];

if (strlen($numero) == 4) {
    echo strrev($numero);
} else {
    echo "Por favor, ingrese un número de 4 cifras.";
}
?>
