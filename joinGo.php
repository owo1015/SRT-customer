<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $id=$_POST['id'];
    $pw1=$_POST['pw1'];
    $pw2=$_POST['pw2'];
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $tel=$_POST['tel'];

    if($pw1 == $pw2) {
        $sql = "insert into user (id, pw1, name, nic, tel) values ('".$id."', '".$pw1."', '".$name."', '".$nic."', '".$tel."')";
        $ret = mysqli_query($con, $sql);
        if($ret) {
            echo '<script>';
            echo 'alert("회원가입 성공");';
            echo 'location.replace("main1.php");';
            echo '</script>';
        }
        else {
            echo '<script>';
            echo 'alert("회원가입 실패");';
            echo 'location.replace("join.php");';
            echo '</script>';
        }
    }
    else {
        echo '<script>';
        echo 'alert("비밀번호가 다릅니다");';
        echo 'location.replace("join.php");';
        echo '</script>';
    }

    mysqli_close($con);
?>