    <?php
    require_once '../database/db.php';
    $userid = $_GET['userid'];
    $pdo = getDB();

    try {
        $sql = "SELECT id FROM mydb WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $pmt = [$userid];
        $stmt->execute($pmt);
        $row = $stmt->rowCount();

        echo "<pre>";
        var_dump($row);
        echo "</pre>";

        if($row > 0){
            echo "중복되는 아이디";
            echo "<button onclick='closeWin()'>닫기</button>";
        }else{
            echo "사용 가능한 아이디";
            echo "<button onclick='closeWin()'>닫기</button>";
        }
        ?>
        <script>
            function closeWin(){
                let row = <?=$row?>;
                if(row == 0) {
                    console.log(opener.document.querySelector("#ck").value);
                   opener.document.querySelector("#ck").value = row;
                   opener.document.querySelector("#sml").innerHTML = "사용 가능 아이디";
                }else{
                    opener.document.querySelector("#sml").innerHTML = "중복되는 아이디";
                }
                return window.close();
            }
        </script>
<?php
    } catch (PDOException $e) {
        echo $e;
    }








