<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        @session_start();

        if(isset($_SESSION['id'])) {
            $con = mysqli_connect("localhost","SRT","1234","SRT");
            $sql = "select * from basket where user_id='".$_SESSION['id']."'";
            $ret = mysqli_query($con, $sql);

            $mname = $_GET["mname"];
            $mprice = $_GET["mprice"];
            $id = $_SESSION["id"];
            $rname = $_GET["rname"];

            $overlap = 0;
            while($row = mysqli_fetch_array($ret)) {
                if($row['menu_mname'] == $mname) {
                    $overlap++;
                    $amount = $row["amount"];
                }
            }

            if($overlap >= 1) {
                $amount++;
                $sql = "update basket set amount=".$amount." where menu_mname='".$mname."'";
                $ret = mysqli_query($con, $sql);
            }
            else {
                $amount = 1;
                $sql = "insert into basket (menu_mname, bprice, amount, user_id, restaurant_rname) values ('".$mname."', ".$mprice.", ".$amount.", '".$id."', '".$rname."')";
                $ret = mysqli_query($con, $sql);
            }

            echo "<script>alert('장바구니에 {$mname}가 담겼습니다.');history.back();</script>";
        }
        else {
            echo "<script>alert('로그인이 필요합니다.');location.replace('login.php');</script>";
        }
    ?>
</body>
</html>