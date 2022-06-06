<?php
    $con = mysqli_connect("localhost", "root", "hj990814", "hyunju");

    $id=$_POST["id"];
    $uname = $_POST["uname"];
    $pass =$_POST["pass"];
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    if(isset($row)){
        echo"<script> window.alert('이미 가입된 이메일입니다.');</script>";
        echo"<script> location.href='join.php';</script>";
    } else{
        $sql = "INSERT INTO members (id, uname, pass) 
            VALUES ('$id', '$uname', '$pass') ";
        mysqli_query($con, $sql);
        // $result= mysqli_query($conn, $sql) or die(mysqli_error($conn).$sql);
    }
    //db name check
?>
<!Doctype html>
<html>
    <script> 
    alert('회원가입이 완료되었습니다. 로그인 해주세요.');
    document.location.href="first.php"; 
    </script>
</html>
