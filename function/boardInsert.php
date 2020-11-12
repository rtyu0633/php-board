<?php

require_once '../database/db.php';

$pdo = getDB();

$id = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];


echo $id,$title,$content;

try{
    $sql = "INSERT INTO board (`id`,`title`,`content`,`date`) VALUES (?,?,?,now())";
    $stmt = $pdo->prepare($sql);
    $pmt = [$id,$title,$content];
    $stmt->execute($pmt);

    echo "<script> location.replace('/view/board.php') </script>";

}catch(Exception $e){
    echo $e;
}