<?php
require 'php_mongodb/vendor/autoload.php';
// conectar ao  mongodb
$connection = new MongoClient();

$db= $connection->pdl;

$pdl_collection = $db->Cliente;



?>
