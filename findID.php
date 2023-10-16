<?php
    $con = mysqli_connect("localhost","SRT","1234","SRT");

    $name = $_POST['name'];
    $tel = $_POST['tel'];

    $sql ="SELECT id FROM user WHERE name='$name' and tel='$tel'";
    $ret = mysqli_query($con, $sql);
    $num = mysqli_num_rows($ret);

    if($num == 0) {
        echo "<script>alert('회원정보가 없습니다.')</script>";
        mysqli_close($con);
        echo "<meta http-equiv='refresh' content='0; url=find.php'>";
    }
    else if($num ==1) {
        $row = mysqli_fetch_array($ret);
        echo "<script>alert('회원님의 아이디는 $row[0]입니다.')</script>";
        mysqli_close($con);
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }
    else {
        echo "<script>alert('Fatal ERROR.... ask ADMIN');history.back()</script>";
        mysqli_close($con);
    }
?>