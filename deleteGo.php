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

            $mname = $_GET['menu_mname'];
            $sql = "delete from basket where menu_mname='".$mname."'";
            $ret = mysqli_query($con, $sql);

            echo "<script>alert('장바구니에서 {$mname}가 삭제되었습니다.');history.back();</script>";
        }
        else {
            echo "<script>alert('로그인이 필요합니다.');location.replace('login.php');</script>";
        }
    ?>
</body>
</html>