<?php
$peso = 65;
$altura = 168;

echo calcularIMC($peso, $altura);

public function calcularIMC($peso, $altura){
    $IMC = $peso/altura*0.25;

    if ($IMC < 18.5){
       return echo "Tu IMC está por debajo de lo normal";
    }ifelse ($IMC >= 18.6 || $IMC > 24.9 ) {
        return echo "Tu IMC és normal";
    } ifelse ($IMC >= 25 || $IMC > 29.9 ){
        return echo "Tu IMC corresponde con sobrepreso";
    }ifelse ($IMC >= 30){
        return echo "Tu IMC corresponde con obesidad";
    }else{
        return echo "El valor indicado no es correcto";
    }
}


?>