<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="library/bootstrap.min.css">
    <link rel="stylesheet" href="library/index.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">

    <form action="function/select.php" method="POST" id="frm" class="login-form">
        <p class="login-para">Login</p>
        <input class="input-cus" type="text" name="id" id="id" placeholder="user id"> <br>
        <input class="input-cus" type="password" name="password" id="password" placeholder="password"> <br>

        <input class="input-btn" type="submit" value="로그인">
        <a class="register" href="view/insert_view.php">회원가입</a>
    </form>
</div>


<script src="library/bootstrap.js"></script>
</body>
</html>
