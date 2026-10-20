<?php

//Outro looping muito usado é o While , sintaxe semelhante as outras linguagens, bastando informar a condição

echo("While <br>");

$contador = 0;

while ($contador <= 10) {
    echo($contador ."<br>");
    $contador++;
};

echo ("<br>");


// No Do While a sintaxe é a semelhante ao de outras linguagens, mantendo a particularidade de rodar pelo menos uma vez antes de testar a condição

$i = 1;

do {
    echo "O número é: " . $i . "<br>";
    $i++;
} while ($i <= 5);


?>