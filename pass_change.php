<?php 
include_once("config.php");
session_start();
$username = $_SESSION['username'];
$Old_pass = $_SESSION['password'];
if(isset($_POST['submit'])){
	$OPass = $_POST['OPassword'];
	$NPass = $_POST['NPassword'];
	$CNPass = $_POST['CNPassword'];	
	if($Old_pass == $OPass){
		if($NPass == $CNPass){
			$sql = "UPDATE `users` SET `password`='$NPass' WHERE `username`='$username'";
			$mysqli->query($sql);
			if(!$mysqli->error){
				$_SESSION['password'] = $NPass;
				header("Location: account2.php");
			}
			else{
				echo"".$mysqli->error;
			}
		}
		else{
			echo"Password do not match";
		}
	}
	else{
		echo"Old Password is wrong!!!";
	}
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
<!--
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account2.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard2.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about2.html">ABOUT</a></div>
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
			<h1><strong>Change Password</strong></h1>
			<div id="sign_div">
				Old password*<br><br>New Password*<br><br>Confirm New Password*
			</div>
			<div id="sign_div2">
			<form action="pass_change.php" method="post">
				<input style="height:30px;font-size:14pt;" type="password" name="OPassword" placeholder="*****" required><br><br>
				<input style="height:30px;font-size:14pt;" type="password" name="NPassword" placeholder="*****" required><br><br>
				<input style="height:30px;font-size:14pt;" type="password" name="CNPassword" placeholder="*****" required><br><br>
				<input type="submit" name="submit" class="btn btn-dark" value="Change Password">
			</form>
			</div>


        </div>
		</div>
	
	

        
</body>
</html>
