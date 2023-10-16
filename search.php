<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=urf-8">
    <link rel="stylesheet" href="">
    <link rel= "stylesheet" href="css/search.css">
    <title>검색 결과</title>
</head>
<body>
<div id="con">
    <div id="login">
    <div id="login_form">
        <h1 class="login" style="letter-spacing:-1px;">검색 결과</h1>
        <hr>
        <br>

    <div class='search'>
    <form action='restaurant_search.php' method='get'>
    <input type='text' name='search' size='20' required='required'  class="size">
    <button id="sc">검색</botton>
    </form>
    </div>

<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $sql = "SELECT * FROM restaurant where rname='$search'";
    $ret = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($ret)) {

        echo "<div id='con2'>";
        echo "<div id='login2'>";
        echo "<div id='login_form2'>";
        echo "<td>List</td><hr>";
        echo "<br>";

        echo "<a href='menu.php?rname=", $row['rname'], "' style='font-size: 20px;text-decoration-line: none; color: black;'>", $row['rname'], "</a>";
    }
?>
</body>
</html>