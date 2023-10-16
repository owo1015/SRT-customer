<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrap">
        <div class="login">
            <h2>SRT</h2>

            <form method="POST" action='loginGo.php'>

            <div class="login_id">
                <h4>&nbsp;&nbsp;&nbsp;아이디</h4>
                <input type="text" name="id" placeholder="ID" required>
            </div>
            <div class="login_pw">
                <h4>&nbsp;&nbsp;&nbsp;비밀번호</h4>
                <input type="password" name="pw1" placeholder="Password" required>
            </div>
                <div class="joinfind">
                <a href="join.php">회원가입</a>
                <a href="find.php">계정찾기</a>
            </div>
            <div class="submit">
                <a href="loginGo.php"><input type="submit" value="로그인"></a>
            </div>
        </div>
    </div>
</body>
</html>