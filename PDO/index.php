<?php

require('classes/Database.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$Database = new Database;

$Database->query('SELECT * from posts');
$rows = $Database->resultset();

print_r($rows);