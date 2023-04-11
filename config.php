<?php

$db_name = 'crm';
$db_host = '127.0.0.1';
$db_port = '1010';
$db_user = 'root';
$db_pass = ''; 

try {
    $pdo = new PDO("mysql:dbname={$db_name};host={$db_host};port={$db_port};", $db_user, $db_pass);
} catch (Exception $e) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
    die();
}