<?php
    $conn = mysqli_connect("localhost", "root", "hj990814", "hyunju");

    $filtered = array('uname'=>mysqli_real_escape_string($conn, $_POST['uname']), 
                        'id'=>mysqli_real_escape_string($conn, $_POST['id']));
    $sql = "SELECT * FROM umaster WHERE id='{$filtered['id']}'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    if(isset($row)){
        echo"<script> window.alert('이미 가입된 이메일입니다.');</script>";
        echo"<script> location.href='join.php';</script>";
    } else{
        // $pwd = hash('sha256', $filtered['pwd']);
        $sql = "INSERT INTO umaster (uname, pwd, pnum) 
            VALUES ('{$filtered['uname']}', 
                    '{$filtered['id']}', 
                    '{$pass}') ";
        $result= mysqli_query($conn, $sql) or die(mysqli_error($conn).$sql);
    }
?>
<!Doctype html>
<html>
    <script> 
    alert('회원가입이 완료되었습니다. 로그인 해주세요.');
    document.location.href="index.php"; 
    </script>
</html>
