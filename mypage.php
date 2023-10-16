<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/mypage.css">
    <title>마이페이지</title>
</head>

<body>
<?php
    @session_start();
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
    $sql = "select * from user where id='".$_SESSION['id']."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);
?>

    <div id="login">
    <div id="login_form">
    <div id="con">
    <?php
        $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
        $sql = "select * from basket where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($ret)) {
            $accept = $row['accept'];
        }

        if(isset($accept)) {
            if($accept == 'O')
                echo "<h1 class='login' style='letter-spacing:-1px;'>주문이 수락되었습니다</h1>";
            elseif($accept == 'X')
                echo "<h1 class='login' style='letter-spacing:-1px;'>수락 대기 중입니다</h1>";
        }

        echo "<hr>";
        echo "<br>";

        $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
        $sql = "select * from user where id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($ret);
    ?>

    <div>아이디 : <?php echo $_SESSION['id'] ?></div>
    <div>이름 : <?= $row['name']?></div>
    <div>닉네임 : <?= $row['nic']?></div>
    <div>전화번호 : <?= $row['tel']?></div>
    <br>
    <hr>

    <br>
    <div> 주문내역 </div>
    <br>

    <?php
        $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
        $sql = "select * from basket where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);

        $sum = 0;
        echo "<table>";
        echo "<tr>";
            echo "<td> 가게이름 </td>";
            echo "<td> 메뉴이름 </td>";
            echo "<td> 가격 </td>";
            echo "<td> 수량 </td>";
            echo "</tr>";

            while($row = mysqli_fetch_array($ret)) {
                $takeout = $row['takeout'];
                $time = $row['time'];
                $date = $row['date'];
                $num = $row['num'];
                $payment = $row['payment'];
                echo "<tr>";
                echo "<td>", $row['restaurant_rname'], "</td>";
                echo "<td>", $row['menu_mname'], "</td>";
                echo "<td>", $row['bprice'], "</td>";
                echo "<td>", $row['amount'], "</td>";
                $sum = $sum + $row['bprice'] * $row['amount'];
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";
            echo "총 합계: ", $sum, "원<br>";
            echo "<br>";
            
            echo "<hr>";
            echo "<br>";
            if($sum > 0) {
                echo $takeout, "<br>";
                echo $payment, "<br>";
                echo $date, "<br>";
                echo $time, "<br>";
                echo $num, "명<br>";
            }
    ?>
</body>
</html>