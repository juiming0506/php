<?php

// define('WEB_ROOT', ' http://localhost/php-test/')
define('WEB_ROOT', '/php-test/');

session_start();

$db_host = 'localhost';
$db_name = 'proj59';
$db_user = 'judykuo';
$db_pass = '1234';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
?>