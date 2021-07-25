<?php

$nome = "igor soares";

$nome = strtoupper($nome); // DEIXA TODA A STRING EM LETRAS MAIUSCULAS

echo $nome;

$nome = strtolower($nome); // DEIXA TODA A STRING EM LETRAS MINISCULAS

echo "<br>";

echo $nome;

echo "<br>";

echo ucwords($nome); // PRIMEIRA LETRA DE CADA PALAVRA FICA MAISCULA

echo "<br>";

echo ucfirst($nome); // PRIMEIRA LETRA DA STRING FICA MAIUSSCULA

?>