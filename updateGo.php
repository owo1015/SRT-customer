<?php
    @session_start();

    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $id=$_SESSION['id'];
    $pw1=$_POST['pw1'];
    $pw2=$_POST['pw2'];
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $tel=$_POST['tel'];

    if($pw1 == $pw2) {
        $sql = "update user set pw1='".$pw1."', name='".$name."', nic='".$nic."', tel='".$tel."'
        where id='".$id."'";

        $ret = mysqli_query($con, $sql);
        if($ret) {
            echo '<script>';
            echo 'alert("프로필이 수정되었습니다.");';
            echo 'location.replace("main2.php");';
            echo '</script>';
        }
        else {
            echo '<script>';
            echo 'alert("프로필 수정에 실패했습니다.");';
            echo 'location.replace("update.php");';
            echo '</script>';
        }
    }
    else {
        echo '<script>';
        echo 'alert("비밀번호가 다릅니다.");';
        echo 'location.replace("update.php");';
        echo '</script>';
    }

    mysqli_close($con);
?>