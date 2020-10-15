    <!doctype html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
    session_start();
    if (!isset($_SESSION["id"])) {
        echo "<a href='../index.php'>로그인</a>";
    } else {
        echo $_SESSION["id"];
        echo "<a href='../function/logout.php'>로그아웃</a>";
    }
    ?>


    </body>
    </html>