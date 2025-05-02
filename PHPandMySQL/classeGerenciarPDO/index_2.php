<?php

use sys4soft\Database;

define ('MYSQL_CONFIG', [
    'host' => 'localhost',
    'dbname' => 'bd_stock',
    'port' => '3307',
    'username' => 'root',
    'password' => 'root'
]);

require_once 'Database.php';

$db = new Database(MYSQL_CONFIG);

// SELECT
$results = $db->execute_query("SELECT * FROM stock limit 100");

// INSERT

// UPDATE


// DELETE


echo '<pre>';
print_r($results);
echo '</pre>';