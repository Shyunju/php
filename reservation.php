<?php
session_start();
$con = mysqli_connect("localhost", "root", "hj990814", "hyunju");
$sql = "SELECT * FROM members WHERE num={$_SESSION['id']}";
mysqli_query($con, $sql)
// $result = mysqli_query($con, $sql) or die(mysqli_error($con) . $sql);
// $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<script>
    function check_input() {
        if (!document.rev_form.yyy.value) {
            alert("년도가 비었습니다.");
            document.rev_form.yyy.focus();
            return;
        }
        if (!document.rev_form.mmm.value) {
            alert("달이 비었습니다.");
            document.rev_form.mmm.focus();
            return;
        }
        if (!document.rev_form.ddd.value) {
            alert("날이 비었습니다.");
            document.rev_form.ddd.focus();
            return;
        }
        if (!document.rev_form.info.value) {
            alert("시간이 비었습니다.");
            document.rev_form.info.focus();
            return;
        }
        if (!document.rev_form.title.value) {
            alert("목적이 비었습니다.");
            document.rev_form.title.focus();
            return;
        }

        document.rev_form.submit();
        // 모두 확인 후 submit()
    }
</script>
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="member.css">
</head>

<body>
    <a href="main.php" id="logo"><img src="logo.png" width="300px" height="60px"></a>
    <br>
    <div id='right_side'>
        <!-- <php
        echo $_SESSION['uname'] . "님";
        ?> 
        <img src="logout.png" width="75px" height="25px" type="button" name="logout" value="logout" onClick="outcheck()"><br>
        <a href="poster_confirm.php"><img src="confirm.png"></a><br>
    </div> -->

    <form action="rev_access.php" name="rev_form" method="post">
        <section id='right'>
            <br>
            <table>
                <tr>
                    <td>날짜</td>
                    <td>
                        <select name="yyy">
                            <option selected>년</option>
                            <option name="2021" value="2021">2022</option>
                            <option name="2022" value="2022">2023</option>
                        </select>

                        <select name="mmm">
                            <option selected>월</option>
                            <option name="1" value="1">1</option>
                            <option name="2" value="2">2</option>
                            <option name="3" value="3">3</option>
                            <option name="4" value="4">4</option>
                            <option name="5" value="5">5</option>
                            <option name="6" value="6">6</option>
                            <option name="7" value="7">7</option>
                            <option name="8" value="8">8</option>
                            <option name="9" value="9">9</option>
                            <option name="10" value="10">10</option>
                            <option name="11" value="11">11</option>
                            <option name="12" value="12">12</option>
                        </select>

                        <select name="ddd">
                            <option selected>일</option>
                            <option name="1" value="1">1</option>
                            <option name="2" value="2">2</option>
                            <option name="3" value="3">3</option>
                            <option name="4" value="4">4</option>
                            <option name="5" value="5">5</option>
                            <option name="6" value="6">6</option>
                            <option name="7" value="7">7</option>
                            <option name="8" value="8">8</option>
                            <option name="9" value="9">9</option>
                            <option name="10" value="10">10</option>
                            <option name="11" value="11">11</option>
                            <option name="12" value="12">12</option>
                            <option name="13" value="13">13</option>
                            <option name="14" value="14">14</option>
                            <option name="15" value="15">15</option>
                            <option name="16" value="16">16</option>
                            <option name="17" value="17">17</option>
                            <option name="18" value="18">18</option>
                            <option name="19" value="19">19</option>
                            <option name="20" value="20">20</option>
                            <option name="21" value="21">21</option>
                            <option name="22" value="22">22</option>
                            <option name="23" value="23">23</option>
                            <option name="24" value="24">24</option>
                            <option name="25" value="25">25</option>
                            <option name="26" value="26">26</option>
                            <option name="27" value="27">27</option>
                            <option name="28" value="28">28</option>
                            <option name="29" value="29">29</option>
                            <option name="30" value="30">30</option>
                            <option name="31" value="31">31</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>시간</td>
                    <td><input class='ta_tx' type="text" name="info" placeholder="일정 예상 시간"></td>
                </tr>
                <tr>
                    <td>목적 </td>
                    <td><input class='ta_tx' type="text" name="title" placeholder="상세 내용"></td>
                </tr>
                
            </table>
            <br>

            <input type="hidden" name="num" value="<?= $_SESSION['id'] ?>">
            <p><img src="rev.png" width="120px" height="40px" onClick="check_input()"></p><br>
        </section>
    </form>

    <script type="text/javascript" src="outcheck.js"></script>
</body>

</html>