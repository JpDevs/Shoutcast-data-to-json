<?php
//By JpDevs
//https://jpdevs.com.br
include('config.php');
header('Content-Type: application/json');
die(json_encode(simplexml_load_string($sc),JSON_PRETTY_PRINT));
?>