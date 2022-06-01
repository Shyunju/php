<?php
        $conn = mysqli_connect("localhost", "root", "hj990814", "hyunju");        session_start();

        $info = $_POST["info"];
        $title = $_POST["title"];
        $yyy = $_POST["yyy"];
        $mmm = $_POST["mmm"];
        $ddd = $_POST["ddd"];


        $sql = "INSERT INTO lec_info (info, title, yyy, mmm, ddd, umaster_id) 
                VALUES ('{$filtered['intro']}', 
                        '{$filtered['info']}', 
                        '{$filtered['title']}', 
                        '{$filtered['theme']}',
                        '{$filtered['runtime']}',
                        '{$filtered['recruit']}',
                        '{$filtered['hope']}',
                        '{$filtered['yyy']}',
                        '{$filtered['mmm']}',
                        '{$filtered['ddd']}',
                        '{$_POST['umaster_id']}') ";
        $result= mysqli_query($conn, $sql) or die(mysqli_error($conn).$sql);
        echo"<script> location.href='calendar.php';</script>";
?>