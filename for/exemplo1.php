<?php

// for ($i = 0; $i <= 10; $i++) {

// echo $i . "<br>";

// }

// 1 passo: definiir um valor para a variavel de controle $i.
// 2 passo: definir até quando a repetição sera executada; (enquando $i for menor ou igual a 10).
// 3 passo: incrementar o controle em 1 para a proxima execução.


for ($i = 0; $i < 1000; $i += 5) {

    if ($i > 200 && $i < 800) continue;

    if ($i === 900) break;

    echo $i . "<br>";
    
    }
// Exemplo de for incrementando a variavel de controle de 5 em 5.
// Com o IF utlizado acima, quando o numero estiver entre 200 e 800 ele ira ignorar e continuar.
// Com o break ele interrompe o laço e pula pra proxima linha do codigo fora da chave.

 

?>

