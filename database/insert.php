    <?php
    require_once 'db.php';

    $pdo = getDB();

    $id = $_POST['id'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO mydb (`id`,`password`,`email`) values (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $pmt = [$id, $pass, $email];
        $stmt->execute($pmt);

            echo "회원가입이 완료되었습니다.";
            echo "<script> location.replace('/') </script>";

    } catch (PDOException $e) {
        echo $e;
    }