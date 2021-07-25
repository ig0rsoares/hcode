<?php

// include "exemplo1.php"; // Utiliza o codigo presente no arquivo "exemplo1.php", no código do arquivo atual.
// require "exemplo1.php" // // Utiliza o codigo presente no arquivo "exemplo1.php", no código do arquivo atual.

require_once "exemplo1.php"; // Quando o require_onde ou include_once é utilizado ele prefine o erro fatal por chamar
require_once "exemplo1.php"; //  o mesmo  arquivo ou função.   

$resultado = somar(10, 20);

echo $resultado;


?>

<!-- require obriga que o arquvio exista e esteja funcionando coretamente, caso contrario ele gera um erro fatal -->
<!-- include tenta executar mesmo com o arquivo inexistente ou com algum problema -->
<!-- include permite que vc inclua arquivos de dominios externos -->