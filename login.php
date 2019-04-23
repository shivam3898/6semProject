<?php include_once("config.php");
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>ASS Gaming</title>
	<script>
		alert("Login First");
	</script>

</head>

<body>
	
	
	<?php
		if(isset($_POST['commit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
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
	
	
	
	
	
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account2.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
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
