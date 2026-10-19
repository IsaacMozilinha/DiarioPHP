<?php 

// IF e Else ou em termos didáticos "Desvio Condicional" é aquela velha forma de colocarmos um desvio na execução do nosso código que em caso a condição seja verdadeira ele executa uma ação e em caso de falso ela executa outra
// A sintaxe semelhante as outras linguagens, como nos exemplos abaixo:

echo("Teste de maior idade <br>");

$idade = 17;

if($idade >= 18) {
    echo("maior de idade<br>");
} 
else {
    echo("menor de idade<br>");
}

//Segundo exemplo
echo("Numero positivo <br>");

$numero = 0;

if($numero > 0) {
    echo("O número é positivo<br>");
} 
else if ($numero < 0) // para seguir a condição do if usamos else if
{
    echo("O número é negativo<br>");
}
else{
    echo("O número é zero <br>");
}

//O PHP também suporta operador ternário, que é uma forma mais resumida de usar o IF e ELSE (Condição)
//A sintaxe é semelhante a de outras linguagens sendo $resultado = (condição) ? 'valor se verdadeiro' : 'valor se falso'; (IF representado por ? e ELSE reprersentado por :)
// Cuidado na utilização, o uso em determinads condições pode deixar o código mais confuso e ilegível

$idade = 18;

$status = ($idade >= 18) ? 'Maior de idade' : 'Menor de idade'; //Note que a operação ´[e passada dentro de uma variável

echo $status; // Exibe: Maior de idade


?>