<?php

use sys4soft\Database;

define ('MYSQL_CONFIG', [
    'host' => 'localhost',
    'port' => 3307,
    'dbname' => 'bd_stock',
    'username' => 'root',
    'password' => ''
])

require_once 'Database.php';

$db = new Database(MYSQL_CONFIG);

// SELECT

// INSERT

// UPDATE


// DELETE
