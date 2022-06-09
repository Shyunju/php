<!DOCTYPE html>
<script>
    function check_input() {
        if (!document.join_form.uname.value)
        // join_form 이름을 가진 form 안의 uname 의 value가 없으면
        {
            alert("닉네임을 입력하세요!");
            document.join_form.uname.focus();
            // 화면 커서 이동
            return;
        }
        if (!document.join_form.id.value) {
            alert("아이디을 입력하세요!");
            document.join_form.email.focus();
            return;
        }
        if (!document.join_form.pass.value) {
            alert("비밀번호를 입력하세요!");
            document.join_form.pass.focus();
            return;
        }

        document.join_form.submit();
        // 모두 확인 후 submit()
    }
</script>
<?php
$conn = mysqli_connect("127.0.0.1", "root", "hj990814", "hyunju");
?>
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="join.css">
</head>

<body style="background-color : #D4F4FA">

    <p>
        <a href="first.php"><img src="logo.png" width="300px" height="60px"></a>
    </p>
    <form action="join_access.php" name="join_form" method='POST'>
        <input id="name" type="text" name="uname" placeholder="이름 입력"><br>
        <input type="text" name="id" placeholder="아이디 입력"><br>
        <input type="password" name="pass" placeholder="비밀번호 입력"><br>

        <p>
            <img src="join.png" width="120px" height="40px" onClick="check_input()">
        </p>
    </form>

</body>

</html>