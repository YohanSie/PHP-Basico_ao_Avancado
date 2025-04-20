<?php

echo "Número da linha em index1.php: " . __LINE__ . "<br>";

require_once 'script.php';

echo '(index1.php)' . __FILE__ . '<br>';

include 'script1.php';
require 'script1.php';