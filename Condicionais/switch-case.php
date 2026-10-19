<?php
//Outra forma de trabalharmos o desvio condicional é por meio do Switch case, ele é muito bom quando temos que tratar vários cenários, ele apresenta uma sintaxe limpa e elegante
// A sintaxe é semelhante ao das outras linguagens, como vemos no exemplo abaixo: 


echo("Calculadora <br>");

$num1 = 10;
$num2 = 20;
$operacao = "+";
$resultado = 0;

switch ($operacao){

case "+": //caso
    $resultado = $num1 + $num2; //Ação tomada
    echo($resultado);
    echo("<br>");
    break;

case "-": //caso
    $resultado = $num1 - $num2; //Ação tomada
    echo($resultado);
    echo("<br>");
    break;

case "*": //caso
    $resultado = $num1 * $num2; //Ação tomada
    echo($resultado);
    echo("<br>");
    break;

case "/": //caso
    $resultado = $num1 / $num2; //Ação tomada
    echo($resultado);
    echo("<br>");        
    break;

default: //Tratativa quando a situação não cai em nenhum caso mapeado
    echo(" Operação não reconhecida");
    echo("<br>");

}

?>