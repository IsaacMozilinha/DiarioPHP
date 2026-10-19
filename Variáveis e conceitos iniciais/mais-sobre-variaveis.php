<?php 

//É possível realizar operações matemáticas dentro das variáveis como vemos no exemplo abaixo:

echo("Área do retângulo <br>");

$altura = 10;
$largura= 20;

$area = $altura * $largura;

echo("A área é $area<br>");

echo("Média aritmética <br>");

$nota1 = 8;
$nota2 = 9;
$nota3 = 7;

$media = ($nota1 + $nota2 + $nota3)/3; //use o parênteses para prioridade

echo("A média foi $media <br>");

echo("Temperatura de Celsius para Fahrenheit <br>");

$temperatura = 35;

$formula = ($temperatura * 1.8 ) + 32;

echo("Temperatura é $formula F <br>");


?>