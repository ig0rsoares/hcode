<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' =>20
));

array_push($pessoas, array(
    'nome' => 'Igor',
    'idade' =>25
));

echo json_encode($pessoas);


?>