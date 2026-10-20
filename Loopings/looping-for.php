<?php

//Sintaxe do looping For semelhante aos das outras linguagens, váriavel de controle, condição e incremento como vemos no exemplo abaixo:

echo("For <br>");

for($i = 0; $i <= 10; $i++){

    echo($i ."<br>");

}

echo ("<br>");

echo("Numeros pares <br>");

for($i = 0; $i <= 50; $i++){

    if($i % 2 === 0) {

    echo($i ."<br>");
}
}

echo ("<br>");

echo("Tabuada do 7 <br>");

for($i = 0; $i <= 10; $i++) {
    $res = 7 * $i;
    echo("7 X $i = $res <br>" );
}

echo ("<br>");

//Exemplo de uso do looping for na contagem do numero de vezes que a variável de incremento é acionada

echo("Count e looping for <br>");

$frutas = [
    "Maça",
    "Uva",
    "Pera",
    "Mamão",
    "Abacate"
];

$totalfrutas = count($frutas);

for ($i = 1; $i <= $totalfrutas; $i++){
    print_r($frutas);
    echo ("<br>");

};

echo ("<br>");

?>