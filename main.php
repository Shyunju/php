<?php
// session_start();
// if ($_SESSION['id'] === null) {
//     echo "<script> location.href='index.php';</script>";
// }
// $conn = mysqli_connect("localhost", "root", "hj990814", "hsquare");
// $sql = "SELECT * FROM umaster WHERE id={$_SESSION['id']}";
// $result = mysqli_query($conn, $sql) or die(mysqli_error($conn) . $sql);
// $row = mysqli_fetch_array($result);
// ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="main.css">
</head>

<body>
    <p><a href="main.php"><img src="logo.png" width="300px" height="60px"></a></p>
    <?php
    // echo $_SESSION['uname'] . "님";
    ?>
    <img src="logout.png" width="75px" height="25px" type="button" name="logout" value="logout" onClick="outcheck()"><br><br>

    <a href="calendar.php"><img src="reservation.png"></a><br><br>
    <a href="poster_confirm.php"><img src="p_confirm.png"></a><br><br>
    <a href="video_confirm_thumbnail.php"><img src="v_confirm.png"></a><br><br>

    <script type="text/javascript" src="outcheck.js"></script>
</body>

</html>