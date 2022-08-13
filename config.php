<?php
    /*
        C -> CREATE
        R -> READ
        U -> UPDATE
        D -> DELETE
    */
$db_name = 'crm';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; 


$pdo = new PDO("mysql:dbname={$db_name};host={$db_host};", $db_user, $db_pass);