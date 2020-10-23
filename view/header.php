<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>내홈페이지</title>
    <link rel="stylesheet" href="../library/bootstrap.min.css">
    <link href="../library/style.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="menu">
        <div class="menu-info"><a href="main.php">메인페이지</a></div>
        <div class="menu-info"><a href="board.php">게시판</a></div>
        <div class="menu-info"><a href="#">마이페이지</a></div>
        <div class="menu-info">
            <div class="user-info">
                <?php
                session_start();
                if (!isset($_SESSION["id"])) {
                    echo "<a href='../index.php'>로그인</a>";
                } else {
                    echo "닉네임 : ";
                    echo $_SESSION["id"];
                    echo "<a href='../function/logout.php' class='btn btn-danger'>로그아웃</a>";
                }
                ?>
            </div>
        </div>
    </div>
</header>

<div class="container">


