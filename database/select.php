<?php
require_once 'db.php';


$id = $_POST['id'];
$pass = $_POST['password'];
$pdo = getDB();

function array_empty_check($array)
{
    if (!is_array($array))
        $array = [$array];
    foreach ($array as $item) {
        if (trim($item) == "")
            return false;
    }
    return true;
}

try {
    $sql = "SELECT * FROM mydb where id = ? and password = ?";
    $stmt = $pdo->prepare($sql);
    $pmt = [$id, $pass];
    $stmt->execute($pmt);
    $row = $stmt->fetch();
    if (!$row) {
        echo "<script>alert('로그인 실패!');</script>";
        echo "<script> history.back(); </script>";
        exit;
    }

    echo "<script>alert('로그인 되었습니다!');</script>";
    echo "<script> location.replace('/view/main.php') </script>";

} catch (PDOException $e) {
    echo $e;
}
