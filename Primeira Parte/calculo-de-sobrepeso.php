<?php
$peso = 80.0;
$altura = 1.75;
$imc = $peso / $altura ** 2;

if ($imc == 18.5) {
    echo "MAGREZA";
} elseif ($imc > 18.5 && $imc < 24.9) {
    echo "NORMAL";
}elseif ($imc > 25.0 && $imc < 29.9) {
    echo "SOBREPESO $imc";
}

?>