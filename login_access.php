<?php
    
    $con = mysqli_connect("localhost", "root", "hj990814", "hyunju");

    $id=$_POST["id"];
    $pass =$_POST["pass"];

    $sql = "SELECT * FROM members WHERE id ='$id' ";
    $result= mysqli_query($con, $sql);
    // or die(mysqli_error($con).$sql)
    $num_match = mysqli_num_rows($result);
    

    if(!$num_match){
        echo"<script> window.alert('잘못된 아이디 입니다.'); history.go(-1);</script>";
    }else{
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($pass != $db_pass){
            echo"<script> window.alert('잘못된 비밀번호 입니다.'); history.go(-1);</script>";
            exit;
        }else{
            session_start();
            $_SESSION['uname']=$row['uname'];
            $_SESSION['pass']=$row['pass'];
            $_SESSION['id']=$row['num'];

            echo"<script> location.href='main.php';</script>";

        }
    }

    // if($id === $row['id'] && $pwd === $row['pass']){ //id과 pwd가 맞다면로그인
    //     session_start();
    //     $_SESSION['uname']=$row['uname'];
    //     $_SESSION['pass']=$row['pass'];
    //     $_SESSION['id']=$row['num'];

        
    //     echo "<script> location.href='main.php';</script>";
    // } else{
    //     echo"<script> window.alert('잘못된 아이디 혹은 비밀번호입니다.');</script>";
    //     echo"<script> location.href='first.php';</script>";
    // }
