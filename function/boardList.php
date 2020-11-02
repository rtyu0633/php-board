<?php
require_once '../database/db.php';





function boardList()
{
    $pdo = getDB();
    $temp=0;
    try {
        $sql = "SELECT * FROM board ORDER BY idx asc";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        $temp = $row;

    } catch (PDOException $e) {
        echo $e;
    }

    return $temp;
}
