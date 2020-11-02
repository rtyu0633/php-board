    <?php
    require_once '../database/db.php';
    $userid = $_GET['userid'];
    $pdo = getDB();

    try {
        //입력받은 id와 같은 값을 db에서 찾아서 가져옴
        $sql = "SELECT id FROM mydb WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $pmt = [$userid];
        $stmt->execute($pmt);
        $row = $stmt->rowCount();

        echo "<pre>";
        var_dump($row);
        echo "</pre>";

        //값이 가져와지면 row값이 1이 되기 때문에 중복되는 아이디를 걸러줄 수 있음.
        if ($row > 0) {
            echo "중복되는 아이디";
            echo "<button onclick='closeWin()'>닫기</button>";
        } else {
            echo "사용 가능한 아이디";
            echo "<button onclick='closeWin()'>닫기</button>";
        }
        ?>
        <script>
            //닫기 버튼을 눌렀을 때 중복체크를 기록.
            function closeWin() {
                let row = <?=$row?>;
                if (row == 0) {
                    console.log(opener.document.querySelector("#ck").value);
                    opener.document.querySelector("#ck").value = row;
                    opener.document.querySelector("#id").readOnly = true;
                    opener.document.querySelector("#sml").innerHTML = "사용 가능 아이디";
                } else {
                    opener.document.querySelector("#sml").innerHTML = "중복되는 아이디";
                }
                return window.close();
            }
        </script>
        <?php
    } catch (PDOException $e) {
        echo $e;
    }
