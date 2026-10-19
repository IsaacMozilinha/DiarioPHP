<?php

//Para comentários utilizamos "//" semelhante a muitas linguagens do mercado
//Todo código do PHP inicia com o "<?php" e finaliza com o "? >" (Junto é claro como vemos no decorrer desse código, coloquei o espaço pois o interpretador estava usando o exemplo para fechar o código)
//Dizem que o PHP é fracamente tipado, eu particularmente discordo, ele não é tipado igual a C# e Java, mas também não é uma várzea não kkkkkkkkk, isso  é fruto das últimas versões, veremos melhor no decorrer desse repositório

//Iniciaremos com o conceito de variáveis:
//Variáveis no PHP são declaradas com um $:

$variavel = 1;

//No PHP não precisamos declarar o tipo dela como int, bool, string, float, ela "tipa" dinâmicamente, as declarações "vazias nessas variáveis são usadas por meio de valores considerados "sem valor" como vemos abaixo:

$variavel2 = ""; //string vazia
$variavel3 = 0; // valor 0
$variavel4 = false; // valor falso

//Por aí vai...

//Para exibirmos o valor de uma variável usamos o método "eco" que imprime o valor na tela, a sintaxe dele é a seguinte:

echo($variavel);
echo("<br>"); //Sempre termine com ponto e vírgula, ou verá o erro na linha a frente

//Para intercalar o valor da variável com um texto basta passar ela nomarmente como no exemplo abaixo (ah usei a tag <br> do HTML para quebrar a linha):

 $nome = "Isaac";

 echo ("Bem vindo $nome a aula de PHP");
 echo("<br>"); 

//O valoor da variável também pode mudar independentemente da tipagem, como no exemplo abaixo no qual inicialmente era um valor int, e agora é string:

 $variavel = "usuario";

echo ($variavel);
echo("<br>"); 

//Como a variável tem tipagem dinâmica, caso queira saber mais informações sobre ela como o tipo, use a função var_dump, sintaxe simples como vemos abaixo:

var_dump($variavel);

//Por hoje é isso pessoal ;)

?>