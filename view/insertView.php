<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../library/bootstrap.css">
    <link rel="stylesheet" href="../library/index.css">
</head>
<body>
<div class="wrapper">
    <form action="../function/insert.php" method="POST" name="frm" id="frm" class="register-form">
        <p class="main-para">Register</p>
        <div class="id-wrapper">
        <input type="hidden" id="ck" name="ck" value="1">
        <input class="input-cus input-id" placeholder="id" type="text" name="id" id="id">
        <small id="sml"></small>
        <input class="input-btn" id="overlap" type="button" onclick="overlap()" value="중복체크">
        </div>
        <input class="input-cus" type="password" placeholder="password" name="password" id="password">
        <input class="input-cus" type="email" placeholder="email" name="email" id="email">

        <input class="input-btn" type="button" onclick="check()" value="회원가입">
        <a class="text-secondary" href="../index.php">로그인페이지로</a>

    </form>
</div>
<script>
    function overlap() {
        let a = document.frm.id.value;
        if (a) {
            let url = "../function/idCheck.php?userid=" + a;
            window.name = "par";
            window.open(url, "childWin", "width=500,height=200");


        } else {
            alert('아이디를 입력해주세요');
            return false;
        }
    }

    function check() {
        if (document.frm.ck.value.trim() > 0) {
            alert("중복체크를 해주세요.");
            return false;
        }

        if (document.frm.id.value.trim() == "") {
            alert("아이디를 입력해주세요");
            document.frm.ck.value = "1";
            document.frm.id.focus();
            return false;
        }
        if (document.frm.password.value.trim() == "") {
            alert("비밀번호를 입력해주세요");
            document.frm.password.focus();
            return false;
        }
        if (document.frm.email.value.trim() == "") {
            alert("이메일을 입력해주세요");
            document.frm.email.focus();
            return false;
        }

        return document.frm.submit();

    }


</script>
</body>
</html>