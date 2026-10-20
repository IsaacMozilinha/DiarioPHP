<?php

//Os operadores são semelhantes aos de outras linguagens comovemos nos exemplos abaixo:              

echo("Operadores <br>");

$a = 10;
$b = 6;

echo("Adição ".$a + $b ."<br>");
echo("Subtração ".$a - $b ."<br>");
echo("Multiplicação ".$a * $b ."<br>");
echo("Divisão ".$a / $b ."<br>");
echo("Resto ".$a % $b ."<br>");
echo("Potência ".$a ** $b ."<br>");

echo("Calculadora de IMC <br>");


$peso = 100;
$altura = 1.79;
$calcaltura= $altura*$altura;
$imc = $peso / $calcaltura;

if ($imc <= 18.5){
    echo("Abaixo do peso");
}
else if ($imc == 18.5 || $imc <= 24.9){
    echo("Peso normal");
}
else if ($imc == 25.6 || $imc <= 29.9){
    echo("Sobrepeso");
}
else if ($imc == 30.0 || $imc <= 34.9){
    echo("Obesidade grau 1");
}
else if ($imc == 35.0 || $imc <= 39.9){
    echo("Obesidade grau 2");
}
else {
    echo("Obesidade grau 3");
}

echo("<br>");


?>