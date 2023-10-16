<?php
    @session_start();

    $con = mysqli_connect("localhost","SRT","1234","SRT");
    $sql = "select * from user where id='".$_SESSION['id']."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);
?>

<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="update.css">
    <title>회원 정보 수정</title>
</head>
<body>
    <section>
    <div id="con">
    <div id="login_form">
        <div id="login">
        
    <center><h1>회원 정보</h1></center>
    <hr>
    <div class="infor">
        <form action="updateGo.php" method="post">
            <table>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">아이디</td>
                    <td><?php echo $_SESSION['id'] ?></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">비밀번호</td>
                    <td><input type="password" name="pw1" value=<?= $row['pw1']?>></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">비밀번호 확인</td>
                    <td><input type="password" name="pw2" value=<?= $row['pw1']?>></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">이름</td>
                    <td><input type="text" name="name" value=<?= $row['name']?>></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">닉네임</td>
                    <td><input type="text" name="nic" value=<?= $row['nic']?>></td>
                </tr>
                <tr>
                    <td style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">전화번호</td>
                    <td><input type="text" name="tel" value=<?= $row['tel']?>></td>
                </tr>
            </table>
        </div>   
        <hr>
        
        <input type="submit" value="수정" class="findbtn">
        <button type="button" onclick="location.href='main2.php'" class="findbtn">Home</button>
        <br><br>
        </form>
    </section>
</body>
</html>
