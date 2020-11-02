<?php

function getDB(){
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'test';

        $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

        //pdo객체 돌려주기
        return new \PDO($dsn, $username,$password);
}
