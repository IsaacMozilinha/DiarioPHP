<?php

//O Match é uma novidade no PHP 8, ela permite fazer comparações estritas, é bem útil e com sintaxe simples:

echo(" Exemplo: Qualidade da nota <br>");

$notafinal = 10;

$resultadomedia = match($notafinal){

10 => "Excelente", //No PHP o operador => serve para associação, veremos isso melhor no tópico de arrays

9=> "Muito bom",

8 => "Bom",

7 => "Mediocre",

default => "Ruim",


};

echo("Resultado da nota é: $notafinal , e a avaliação é: $resultadomedia <br>");


?>