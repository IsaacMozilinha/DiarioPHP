<?php

//O break tem a função de interromper a execução do bloco de código quando determinada condição é alcançada, a sintae dele não muda com relação a outras linguagens

echo ("Utilizando break");

for ($i = 1; $i <= 50; $i++){

    echo($i ."<br>");
    if ($i == 35){
        break;
    }

}

echo ("<br>");

//O continue faz com que determinada condição não seja registrada caso alcançada, nesse exemplo tiramos os multiplos de 3, a sintaxe é semelhante as outras linguagens

echo ("Utilizando continue <br>");


for ($i = 1; $i <= 50; $i++){

    
    if ($i % 3 == 0){
        continue;
    }
echo($i ."<br>");
}

echo ("<br>");

echo ("Utilizando break em arrays <br>");


$nomes = [

"João",

"Carlos",

"Maria",

"Isaac",

"Pedro"

];

foreach($nomes as $nome){

echo($nome ."<br>");

if($nome == "Isaac"){
        echo("Encontrado");
        break;
    };
}


?>