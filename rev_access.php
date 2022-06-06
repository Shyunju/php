<?php
        $conn = mysqli_connect("localhost", "root", "hj990814", "hyunju");        
        session_start();

        $info = $_POST["info"];
        $title = $_POST["title"];
        $yyy = $_POST["yyy"];
        $mmm = $_POST["mmm"];
        $ddd = $_POST["ddd"];
        $user_num = $_POST["num"];


        $sql = "INSERT INTO todo (info, title, yyy, mmm, ddd, user_num) 
                VALUES ('$info', '$title', '$yyy', '$mmm', '$ddd', '$user_num')";
        mysqli_query($conn, $sql);
        // $result= mysqli_query($conn, $sql) or die(mysqli_error($conn).$sql);
        echo"<script> location.href='calendar.php';</script>";
?>