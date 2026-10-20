<?php

// Os Arrays servem para guardar coleções de elementos em uma única variável
// A sintaxe deles é semelhante as de outras linguagens:

echo("Arrays cidades <br>");
$cidades = [
    "São Paulo",
    "Serra Negra",
    "Campos do Jordão",
    "Matão",
    "Campinas",
    "Votorantim"
];

echo($cidades[0]); //Imprime o valor do indice 0 (lembrando que array começa do 0)

echo("<br>");


echo("Arrays nomes <br>");

$nomes = [
    "Peter",
    "Mary Jane",
    "Harry",
    "Mei"
];

echo ($nomes[0]);

echo("<br>");


$nomes[] = "Otto"; //Adiciona o item ao Array (nesse contexto irá ao fianl do array)

$nomes[] = "Grey";

print_r($nomes); //Imprime todos os itens do array juntamente com seu indice

echo("<br>");


echo count($nomes); //Conta todos os itens do Array

echo("<br>");


sort($nomes); //Ordena os itens do Array por ordem alfabética

echo("<br>");


print_r($nomes); 

echo("<br>");


if ( in_array("Peter", $nomes)) //Método que serve para encontrar um determinado valor dentro do array
{
    echo "Te encontrei! <br>";
};

?>