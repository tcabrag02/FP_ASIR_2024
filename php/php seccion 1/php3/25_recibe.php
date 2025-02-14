<?php
$numero1 = $_POST["numero1"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($numero1) && $numero1 >= 0 && $numero1 <= 9) {
        // Convertir el dígito en su correspondiente letra
        switch ($numero1) {
            case 0: $letraCorrespondiente = "A"; break;
            case 1: $letraCorrespondiente = "B"; break;
            case 2: $letraCorrespondiente = "C"; break;
            case 3: $letraCorrespondiente = "D"; break;
            case 4: $letraCorrespondiente = "E"; break;
            case 5: $letraCorrespondiente = "F"; break;
            case 6: $letraCorrespondiente = "G"; break;
            case 7: $letraCorrespondiente = "H"; break;
            case 8: $letraCorrespondiente = "I"; break;
            case 9: $letraCorrespondiente = "J"; break;
            default: $letraCorrespondiente = "No es un dígito válido";
        }
        echo "Letra correspondiente al dígito: " . $letraCorrespondiente;
    } else {
        // Convertir el número romano a decimal
        switch (strtoupper($numero1)) {
            case "I": $valorDecimal = 1; break;
            case "V": $valorDecimal = 5; break;
            case "X": $valorDecimal = 10; break;
            case "L": $valorDecimal = 50; break;
            case "C": $valorDecimal = 100; break;
            case "D": $valorDecimal = 500; break;
            case "M": $valorDecimal = 1000; break;
            default: $valorDecimal = "No es un número romano válido";
        }
        echo "Valor decimal del número romano: " . $valorDecimal;
    }
}
?>
