<?php


function teste(){

    global $nome;
    $nome = "Igor";
    echo $nome;
}

echo "$nome";

function teste2(){

$nome = "Joao";

    echo ("<br> $nome agora no teste 2");
}

teste();
teste2();

?>