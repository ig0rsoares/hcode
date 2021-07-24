<?php

$nome = (int)$_GET["a"];
$data = (int)$_GET["b"];

// var_dump($nome);
// var_dump($data);

$ip = $_SERVER["REMOTE_ADDR"];
$nomescript = $_SERVER["SCRIPT_NAME"];
echo $ip;
echo $nomescript;






?>