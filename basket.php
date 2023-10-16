<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/basket.css">
    <title>장바구니</title> 
</head>

<body>
<?php
    @session_start();

    if(isset($_SESSION['id'])) { }
    else {
        echo "<script>alert('로그인이 필요합니다.');location.replace('login.php');</script>";
    }
?>

    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;">장바구니</h1>
    <hr>
    <br>

        <?php
            $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
            $sql = "select * from basket where user_id='".$_SESSION['id']."'";
            $ret = mysqli_query($con, $sql);

            $sum = 0;
            echo "<table>";
            while($row = mysqli_fetch_array($ret)) {
                echo "<tr>";
                echo "<td>", $row['menu_mname'], "</td>";
                echo "<td>", $row['bprice'], "</td>";
                echo "<td>", $row['amount'], "</td>";
                echo "<td id='delete'><a href='deleteGo.php?menu_mname=", $row['menu_mname'], "' style='font-size: 13px;text-decoration-line: none; color: black;'>삭제</a></td>";
                $sum = $sum + $row['bprice'] * $row['amount'];
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";
            echo "총 합계: ", $sum;
        ?>

        <form action="order.php" method="POST">
        <br>
            <input type="checkbox" id="takeout" name="takeout" value="포장"> 포장
            <input type="checkbox" id="takeout" name="takeout" value="매장"> 매장
            <br>
            <input id="order" type="submit" value="주문하기">
        </form>
    </div> 
</body>
</html>