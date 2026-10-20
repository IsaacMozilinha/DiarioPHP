<?php

//Aqui temos mais alguns detalhes sobre os Arrays, como pesquisas e impressões com looping for (que veremos no decorrer desse repositório)

echo("Pesquisa no Array com Foreach <br>");

$frutas = [
    "Maça",
    "Uva",
    "Pera",
    "Mamão",
    "Abacate"
];

foreach ($frutas as $fruta) //as para gravar o valor do array na variável para exibição
//Sintaxe semelhante a de outras linguagens
{
    echo($fruta ."<br>");
}

echo ("<br>");

echo("Primeira letra de cada array <br>");

$frutas = [
    "Maça",
    "Uva",
    "Pera",
    "Mamão",
    "Abacate"
];

foreach ($frutas as $fruta){
    echo($fruta[0] ."<br>"); //Acessa o indice 0 referente a primeira letra
}

echo ("<br>");

echo("Count e looping for <br>");

$frutas = [
    "Maça",
    "Uva",
    "Pera",
    "Mamão",
    "Abacate"
];

$totalfrutas = count($frutas); //Usando o count para contar os itens do array
echo($totalfrutas);
echo ("<br>");

//Imprime os itens do Array de acordo com a condição imposta no looping
for ($i = 1; $i <= $totalfrutas; $i++){
    print_r($frutas);
    echo ("<br>");

};

echo ("<br>");

echo("Array associativo com looping <br>");

$pessoa = [

"nome" => "Isaac",
"Idade" => "27",
"numero" => "7" 

];

foreach ($pessoa as $chave => $valor) //Maneira mais particular de imprimir um array associativo passando a chave e valor com o operador de associação =>
{
    echo($chave . ":" .$valor ."<br>");
}

echo ("<br>");

echo("Array associativo com looping <br>"); 

$pessoa = [

"nome" => "Isaac",
"Idade" => "27",
"numero" => "7" 

];

foreach ($pessoa as $pessoas) //Essa maneira funciona, porém os dados ficam mais avulsos
{
    echo($pessoas ."<br>");
}

echo ("<br>");

//Exemplo semelhante ao utilizado acima

echo("Array multidimensionais <br>");

$alunos = [
[
    "nome" => "João",
    "nota" => 10
],

[
    "nome" => "Maria",
    "nota" => 10
],

[
    "nome" => "Marcos",
    "nota" => 7
],

[
    "nome" => "Kevin",
    "nota" => 6
],

[
    "nome" => "Juliana",
    "nota" => 5
]


];

foreach($alunos as $aluno){
    echo($aluno ["nome"] ." tirou ". $aluno["nota"]."<br>"); // Aqui passamos a  chave junto array para entregar o valor
}

echo ("<br>");

echo("Foreach com condicional <br>");

$alunos = [
[
    "nome" => "João",
    "nota" => 10

],

[
    "nome" => "Maria",
    "nota" => 10
],

[
    "nome" => "Marcos",
    "nota" => 7
],

[
    "nome" => "Kevin",
    "nota" => 6
],

[
    "nome" => "Juliana",
    "nota" => 5
]


];

foreach($alunos as $aluno){

    if($aluno["nota"] >= 7) //Semelhante ao exemplo acima passamos o array e a chave
    {
        echo ($aluno["nome"] ."<br>");
    };

};

echo ("<br>");

echo("Foreach com condicional <br>");

$alunos = [
[
"nome" => "João",
"nota" => 10

],

[
    "nome" => "Maria",
    "nota" => 10
],

[
    "nome" => "Marcos",
    "nota" => 7
],

[
    "nome" => "Kevin",
    "nota" => 6
],

[
    "nome" => "Juliana",
    "nota" => 5
]


];

foreach($alunos as $aluno){

    if($aluno["nota"] <= 5){
        echo ($aluno["nome"] ."<br>");
    };

}

echo ("<br>");


$nomes = [

"João",

"Carlos",

"Maria",

"Isaac",

"Pedro"

];

foreach($nomes as $nome){

echo($nome ."<br>");

echo ("<br>");

if($nome == "Isaac") //Usando comparação com o valor obtido
    {
        echo("Encontrado");
        break;
    };
}


?>