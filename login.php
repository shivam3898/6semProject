<?php include_once("config.php");
session_start();
?>
<html>
<head>
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
		<div class="topNaviagationLink"><a href="account.html">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.html">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
			<h1>LOGIN</h1>
			
			 <div id="sdiv">
			<form action="index.php" method="post">  
           USERNAME &nbsp: <input style="height:30px;font-size:14pt;" type="text" placeholder="Username" name="username" required><br>
			PASSWORD : <input style="height:30px;font-size:14pt;margin-left:3px" type="password" placeholder="****" name="password" required><br><br>
			<input type="submit" name="commit" value="Login">
		</form>
		</div>
			<h3 style="text-align: left">OR</h3>
		<form>
			<input type="button" value="Sign Up" onclick="window.location.href='signup.php'" >
		</form>
        </div>
		</div>
	
	

        
</body>
</html>
