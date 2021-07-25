<?php

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); // determina a posição de "mâe" dentro da string armazenada em $frase.

$texto = substr($frase, 0, $q); // $texto vai armazenar o conteudo da string desde o inicio (0), até a posição de "mãe",
                               // que está armazenada na variavel $q.

var_dump($texto);


$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // $texto2 vai armazenar o conteudo da string $frase
                                                                // a partir da posição da posição da pavra mãe ($q) mais
                                                                // o numero de caracteres amarenazados em $palavra (3),
                                                                // ate o fim da fim da string contida em $frase 

echo "<br>";

echo $texto2;









?>