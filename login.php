<?php include_once("config.php");
session_start();
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
	<link rel="icon" type="image/ico" href="favicon.ico" />
	<title>Login</title>
	

</head>

<body>

	
	
	<?php
		if(isset($_POST['commit'])){
			$username = $_POST['username'];
			$username = mysqli_real_escape_string($mysqli, $username);
			$password = $_POST['password'];
			$password = mysqli_real_escape_string($mysqli, $password);
			$sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
			$result = $mysqli->query($sql);
			if($result->num_rows > 0){
				$_SESSION['username'] = $username;
				header("Location:http://localhost/6semProject/account2.php");
			}
			else{
				echo "<script>alert('Username and password do not match');</script>";
			}
		}
	?>
	
	
	
	
	<!--
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>
	-->
	<div class="toast" data-autohide="false">
	  <div class="toast-header">
		<strong class="mr-auto text-primary">Error</strong>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
	  </div>
	  <div class="toast-body" style="text-align:center;">
		You must login first!
	  </div>
	</div>

<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>
	
	<div class="content">
		 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="index.php"><img src="logo.png" style="width:70px;"></a>
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="leaderboard.php" style="font-size:20px;">Leaderboard</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.html" style="font-size:20px;">About</a>
			</li>
			<div id=nav_1>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size:20px;">
				Profile
			  </a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="account.php">My Account</a>
			  </div>
			</li>
			</div>
		  </ul>
		</nav>
		</div>

        <div class="contentBox">
    	<div class="innerBox">
			<h1><strong>LOGIN</h1>
			
			 
			<form action="index.php" method="post">  
			<div id="sdiv">
           USERNAME &nbsp: <input style="height:30px;font-size:14pt;" type="text" placeholder="Username" name="username" required><br><br>
			PASSWORD : <input style="height:30px;font-size:14pt;margin-left:3px" type="password" placeholder="****" name="password" required><br><br>
			</div>
			<div id="btn_pos2">
			<input type="submit" name="commit" value="Login" class="btn btn-dark">
			<input type="button" value="Sign Up" onclick="window.location.href='signup.php'" class="btn btn-dark">			
			</form>
			</div>
			</div>
		</div>
	
	

        
</body>
</html>
