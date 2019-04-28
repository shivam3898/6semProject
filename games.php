<?php 
include_once("config.php");
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}
?>


<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
<!--
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account2.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>
-->
<div class="content">
		 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="#"><img src="logo.png" style="width:70px;"></a>
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="leaderboard2.php" style="font-size:20px;">Leaderboard</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about2.html" style="font-size:20px;">About</a>
			</li>
			<div id=nav_1>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size:20px;">
				Profile
			  </a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="account2.php">My Account</a>
				<a class="dropdown-item" href="logout.php">Logout</a>
			  </div>
			</li>
			</div>
		  </ul>
		</nav>
		</div>
		
        <div class="contentBox">
    	<div class="innerBox">
			<h1><strong>GAMES</strong></h1>
			<a href="games/snake.php"><img src="sn.png"></a>
			<a href="games/tetris/index.html"><img src="tt.png"></a>
			<a href="games/box.php"><img src="co.png"></a>
			
			<div class="container" style="position:absolute; left:8%;">
			  <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Play the classic Snake Game and eat all you can!">Info</a>
			</div>
			
			<div class="container" style="position:absolute; left:40%;">
			  <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Tetris! The classic puzzle game that started it all.">Info</a>
			</div>
			
			<div class="container" style="position:absolute; left:72%;">
			  <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Ride the Copter through obstacles!">Info</a>
			</div>

			<script>
			$(document).ready(function(){
			  $('[data-toggle="tooltip"]').tooltip();   
			});
			</script>
			
        </div>
		</div>
	
	

        
</body>
</html>