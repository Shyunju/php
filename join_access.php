<?php
    $conn = mysqli_connect("localhost", "root", "hj990814", "hyunju");

    $id=$_POST["id"];
    $uname = $_POST["uname"];
    $pwd =$_POST["pwd"];
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    if(isset($row)){
        echo"<script> window.alert('이미 가입된 이메일입니다.');</script>";
        echo"<script> location.href='join.php';</script>";
    } else{
        // $pwd = hash('sha256', $filtered['pwd']);
        $sql = "INSERT INTO umaster (id, uname, pwd) 
            VALUES ('$id', '$uname', '$pwd') ";
        $result= mysqli_query($conn, $sql) or die(mysqli_error($conn).$sql);
    }
    //db name check
?>
<!Doctype html>
<html>
    <script> 
    alert('회원가입이 완료되었습니다. 로그인 해주세요.');
    document.location.href="index.php"; 
    </script>
</html>