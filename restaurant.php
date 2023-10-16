<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/restaurant.css">
    <title>식당</title>
</head>

<body>
<div id="con">
    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;">식당</h1>
    <hr>
    <br>

    <div class='search'>
    <form action='search.php' method='get'>
    <input type='text' name='search' size='20' required='required' class='size'>
    <button id="sc">검색</botton>
    </form>
    </div>

<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    echo "<div id='con2'>";
    echo "<div id='login2'>";
    echo "<div id='login_form2'>";
    echo "<td>List</td>";
    echo "<hr>";
    echo "<br>";
    
    echo "<center>";
    echo "<details>";
    echo "<summary>한식</summary>";
    $sql = "SELECT * FROM restaurant where type = '한식'";
    $ret = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a></td><br>";
        echo "</tr>";
    }
    echo "</details>";

    echo "<details>";
    echo "<summary>양식</summary>";
        $sql = "SELECT * FROM restaurant where type = '양식'";
        $ret = mysqli_query($con, $sql);
        echo "<table>";
        while($row = mysqli_fetch_array($ret)) {
            echo "<tr>";
            echo "<td>", "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a></td><br>";
            echo "</tr>";
        }
        echo "</table>";
    echo "</details>";

    echo "<details>";
    echo "<summary>일식</summary>";
        $sql = "SELECT * FROM restaurant where type = '일식'";
        $ret = mysqli_query($con, $sql);
        echo "<table>";
        while($row = mysqli_fetch_array($ret)) {
            echo "<tr>";
            echo "<td>", "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a></td><br>";
            echo "</tr>";
        }
        echo "</table>";
    echo "</details>";

    echo "<details>";
    echo "<summary>분식</summary>";
        $sql = "SELECT * FROM restaurant where type = '분식'";
        $ret = mysqli_query($con, $sql);
        echo "<table>";
        while($row = mysqli_fetch_array($ret)) {
            echo "<tr>";
            echo "<td>", "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a></td><br>";
            echo "</tr>";
        }
        echo "</table>";
    echo "</details>";

    echo "<details>";
    echo "<summary>기타</summary>";
        $sql = "SELECT * FROM restaurant where type = '기타'";
        $ret = mysqli_query($con, $sql);
        echo "<table>";
        while($row = mysqli_fetch_array($ret)) {
            echo "<tr>";
            echo "<td>", "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a></td><br>";
            echo "</tr>";
        }
        echo "</table>";
    echo "</details>";

    echo "</center>";
?>
</body>
</html>