<?php
$pdo = "";
function getDB(){
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'test';

        $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
        return new \PDO($dsn, $username,$password);
}

function sql(){
    global $db;
}