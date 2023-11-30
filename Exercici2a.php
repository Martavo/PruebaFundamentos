<?php
$peso = readline("Dame el peso: ");
$altura = readline("Dame la altura: ");

$IMC = $peso / ($altura * 2);

if ($IMC < 18.5) {
    echo "Tu IMC está por debajo de lo normal";
} elseif ($IMC <= 24.9) {
    echo "Tu IMC es normal";
} elseif ($IMC <= 29.9) {
    echo "Tu IMC corresponde con sobrepeso";
} elseif ($IMC <= 30) {
    echo "Tu IMC corresponde con obesidad";
} else {
    echo "El valor indicado no es correcto";
}
?>