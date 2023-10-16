<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="css/main1.css">
    <title>SRT 메인페이지</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>

<?php
    $con = mysqli_connect("localhost","SRT","1234","SRT");

    @session_start();
?>

<header>
	<div class="wrapper">
	  <div class="top_navbar">
	    <div class="hamburger">
	       <div class="one"></div>
	       <div class="two"></div>
	       <div class="three"></div>
	    </div>
			<div class="top_menu">
	      <div class="logo">Shin-chon&Mosirae Reservation Through</div>
	    </div>
	  </div>


	  <div class="sidebar">
	      <ul>
	        <li><a href="login.php">
	          <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
	          <span class="title">로그인</span></a></li>
	        <li><a href="join.php">
	          <span class="icon"><i class="fas fa-file-signature"></i></span>
	          <span class="title">회원가입</span>
	          </a></li>
	        <li><a href="#">
	          <span class="icon"><i class="fas fa-info-circle"></i></span>
	          <span class="title">Information</span>
	          </a></li>
</header>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div><p style="text-align: center;"> <img src="img/식당.png" width="200" height="200" float=left>  <a href="restaurant.php">식당</a> </img></p> </div><br>
	<div><p style="text-align:center;"> <img src="img/커피.png" width="200" height="200" float=left>  <a href="cafe.php">카페</a> </img></p> </div><br><br>
	<p style="text-align:center;"><img src="img/소주.png" width="200" height="200"> <a href="bar.php">술집</a></img></p> 
</body>
</html>