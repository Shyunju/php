<!DOCTYPE html>
<?php
// session_start();
// $conn = mysqli_connect("localhost", "root", "hj990814", "HSQUARE");
?>
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="home.css">
</head>

<body>
    <a href="first.php"><img src="logo.png" width="300px" height="60px"></a><br><br>
    <form action="login_access.php" method='post'>
        <input id="home_email" type="text" name="id" placeholder="아이디 입력"><br>
        <p><input id="home_email" type="password" name="pass" placeholder="비밀번호 입력">
        </p>

        <input type="image" id="login" name="login" src="login.png">
        <a href="join.php"><img src="join.png" width="120px" height="40px"></a>
    </form>

</body>

</html>