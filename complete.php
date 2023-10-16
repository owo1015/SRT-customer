<?php
    @session_start();

    if(isset($_SESSION['id'])) {
        $con = mysqli_connect("localhost","SRT","1234","SRT");
        $sql = "select * from basket where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);

        $time = $_POST["time"];
        $date = $_POST["date"];
        $num = $_POST["num"];
        $payment = $_POST["payment"];

        $sql = "update basket set time='".$time."', date='".$date."', num='".$num."', payment='".$payment."' where user_id='".$_SESSION['id']."'";
        $ret = mysqli_query($con, $sql);
    }
?>

<html>
    <head>
        <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="css/complete.css">
        <title>결제</title>
    </head>
    <body>
    <div id="con">
    <div id="login_form">
    <div id="login">
    
    <center><h1>결제</h1></center>
    <hr>

    <div class="pay">
        <fieldset>
            <table>
                <label>
                <tr>계좌이체의 경우 이체완료 후 결제가 완료됩니다.<tr><br>
                <td>건국은행 123-4567-8901-23으로 송금하세요!<td>
            </label>
            </table>
        </fieldset>
    </form>
    </div>
    <br>
    <button type="button" onclick="location.href='main2.php'" class="home">Home</button>
</body>
</html>