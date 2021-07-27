<?php

$qualASuaIdade = 40;

$idadeCriaca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;



if ($qualASuaIdade < $idadeCriaca) {

    echo "Criança";
} 

elseif ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";
} 

elseif ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";
} 

else {

    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

// ? = então
// : = else






?>