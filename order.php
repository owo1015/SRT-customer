<?php
    @session_start();

    if(isset($_SESSION['id'])) {
        $con = mysqli_connect("localhost","SRT","1234","SRT");
        $sql = "select * from basket where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);

        $takeout = $_POST["takeout"];
        $sql = "update basket set takeout='".$takeout."' where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);

        $sql = "select * from user where id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($ret);
    }
?>

<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/order.css">
    <title>주문하기</title>
</head>
<body>
    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;">주문하기</h1>
        <hr>
        <br>

            닉네임 <?=$row['nic']?><br>
            전화번호 <?=$row['tel']?><br>

        <form action = "complete.php" method="POST">
            <div class="time">
                시간예약 <input type="time" id="time" name="time"><br>
                날짜예약 <input type="date" id="date" name="date"><br>
                인원수 <input type="number" id="num" name="num" min="0">
            </div>

            <br>
            <input type ="checkbox" id="payment" name="payment" value="현장결제"> 현장결제
            <input type ="checkbox" id="payment" name="payment" value="계좌이체"> 계좌이체
            <input id="order" type = "submit" value ="결제하기">
        </form>
    </div>
</body>
</html>