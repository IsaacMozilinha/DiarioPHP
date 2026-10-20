<?php

//Arrays associativos, basicamente usamos o operador => para ligar a chave ao valor, que é diferente do operador = que atribui o valor a uma variável

$usuario=[
    "nome" => "Isaac",
    "idade" => 27,
    "cidade" => "SP"
];

print_r($usuario);

echo("<br>");

// Arrays multidimensionais, guadam mais valores em uma chave específica:

$produtos = [
    [
        "nome" => "Notebook",
        "preco" => 1500,
        "estoque" => 10
    ],

    [
        "nome" => "Iphone",
        "preco" => 4000,
        "estoque" => 8
    ]


];

print_r($produtos); //Imprime os valores e indices
echo("<br>");


echo $produtos[0]["preco"]; //Acessando o valor do indice 0
echo("<br>");


$valorestoque = $produtos[0]["preco"] + $produtos[1]["preco"]; //Somando os valores dos dois indices
echo($valorestoque);
echo("<br>");

$alunos = [
    [
        "nome"=> "João",
        "nota"=> 8
    ],

    [
        "nome"=> "Maria",
        "nota"=> 10
    ]
];

echo($alunos[0]["nome"]. " tirou a nota " .$alunos[0]["nota"] ); //Note que usamos o . ele serve para concatenar o valor da variável com o texto (operador de concatenação)
echo("<br>");

//Exemplo de array multidimensional do  Wordpress

echo("Array WordPress <br>");

$posts = [
    [
        "titulo" => "Primeiro Post",
        "autor" => "Isaac",
        "visualizacao"=> 150
    ],

    [
        "titulo" => "PHP básico",
        "autor" => "Chat",
        "visualizacao"=> 150
    ],

      [
        "titulo" => "Aprendendo Arrays",
        "autor" => "Chat",
        "visualizacao"=> 150
    ]
];

//Imprimindo valores individualmente dentro desse Array 

echo("Título: ".$posts[0]["titulo"]."<br>"); 
echo("Autor: ".$posts[0]["autor"]."<br>");
echo("Visualizações: ".$posts[0]["visualizacao"]."<br>");
echo ("<br>");

?>