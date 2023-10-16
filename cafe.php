<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/bar.css">
    <title>카페</title>
</head>

<body>
    <div id="con">
    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;">카페</h1>
    <hr>

    <br>
    <div class='search'>
    <form action='search.php' method='get'>
    <input type='text' name='search' size='20' required='required' class="size">
    <button id="sc">검색</botton>
    </form>
    </div>
</body>

<body>
<?php
    echo "<div id='con2'>";
    echo "<div id='login2'>";
    echo "<div id='login_form2'>";

    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $sql = "SELECT * FROM restaurant where type = '카페'";
    $ret = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", "<a href='menu.php?rname=", $row['rname'], "'>", $row['rname'], "</a></td>";
        echo "</tr>";
    }

    echo "<hr>";
?>
</body>
</html>