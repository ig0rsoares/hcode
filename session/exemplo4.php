<?php

session_id('t40j19bq7ss2757ohbjth93ev');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>