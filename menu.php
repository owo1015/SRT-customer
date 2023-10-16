<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $sql = "select * from restaurant where rname='".$_GET['rname']."'";

    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);

    $rname = $row['rname'];
    $loc = $row["loc"];
    $open = $row["open"];
    $close = $row["close"];
    $rtel = $row["rtel"];
?>

<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/menu.css">
    <title>메뉴</title>
</head>
<body>
    <a href='basket.php' style="font-size: 13px;text-decoration-line: none; color: black;">장바구니</a>

    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;"><?php echo $rname ?></h1>
    <table>
        <tr>
            <td>위치</td>
            <td><?php echo $loc ?></td>
        </tr>
        <tr>
            <td>영업시간</td>
            <td><?php echo $open ?> ~ <?php echo $close ?></td>
        </tr>
        <tr>
            <td>전화번호</td>
            <td><?php echo $rtel ?></td>
        </tr>
    </table>
    <hr>
</body>
</html>
<?php
    $sql = "select * from menu where restaurant_rname='".$_GET['rname']."' order by no";
    $rname = $_GET['rname'];

    $ret = mysqli_query($con, $sql);

    echo "<form method='POST' action='basketGo.php'>";
    echo "<table>";
    while($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", $row['mname'], "</td>";
        echo "<td>", $row['mprice'], "</td>";
?>
        <td id="select"><a href="basketGo.php?rname=<?=$rname?>&mname=<?=$row['mname']?>&mprice=<?=$row['mprice']?>" style="font-size: 13px;text-decoration-line: none; color: black;">담기</a></td>
<?php
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
?>