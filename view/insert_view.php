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
<form action="../function/insert.php" method="POST" name="frm" id="frm">

    <input type="hidden" id="ck" name="ck" value="1">
    아이디 : <input type="text" name="id" id="id">
    <input type="button" onclick="overlap()" value="중복체크">
    <small id="sml" ></small><br>
    비밀번호 : <input type="password" name="password" id="password"> <br>
    이메일 : <input type="email" name="email" id="email"> <br>

    <input type="button" onclick="check()" value="회원가입"><input type="reset" value="초기화">

</form>

<script>
    function overlap(){
        let a = document.frm.id.value;
        if(a){
            let url = "../function/idCheck.php?userid="+a;
            window.name = "par";
            window.open(url,"childWin","width=500,height=200");


        }else{
            alert('아이디를 입력해주세요');
            return false;
        }
    }

    function check(){
        if(document.frm.ck.value.trim() > 0){
            alert("중복체크를 해주세요.");
            return false;
        }

        if(document.frm.id.value.trim() == ""){
            alert("아이디를 입력해주세요");
            document.frm.ck.value = "1";
            document.frm.id.focus();
            return false;
        }
        if(document.frm.password.value.trim() == ""){
            alert("비밀번호를 입력해주세요");
            document.frm.password.focus();
            return false;
        }
        if(document.frm.email.value.trim() == ""){
            alert("이메일을 입력해주세요");
            document.frm.email.focus();
            return false;
        }

            return document.frm.submit();

    }


</script>
</body>
</html>