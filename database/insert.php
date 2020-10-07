<?php
    require_once 'db.php';


    try{
        $sql = "INSERT INTO ('id','password','email') mydb values ('','','')";

    }catch(PDOException $e){
        echo $e;
    }