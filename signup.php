<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<?php include_once("config.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
	
	
	<p id="para"></p>
	<?php
	session_start();
if(isset($_POST['submit'])){
 $username = $_POST['username']; 
 $password = $_POST['password'];
 $cpass = $_POST['confirm_password'];
    if(empty($username) || empty($password) || empty($cpass)){
        echo "Some fileds are empty.";
    }
    else{
		if($password!=$cpass)
		{
			echo "Password do not match";
		}
		else{
			$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
			if($mysqli->query($sql)){
				echo "data inserted successfully...";
				echo "<script>window.location.href='index.php';</script>";
			}
			elseif(($mysqli->error) == "Duplicate entry '$username' for key 'PRIMARY'"){
				echo"<script>document.getElementById('para').innerHTML='Username already taken. Try another name.'</script>";
			}
			else{
				echo "Error....".$mysqli->error;
			}
		}
    }
}

?>
	
	
	
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.html">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
        	<h1><strong>Sign Up</h1><br>
			<div id="sign_div">
				USERNAME*<br><br>PASSWORD*<br><br>CONFIRM PASSWORD*
			</div>
             <div id="sign_div2">		
				<form action="signup.php" method="post" >
				<input style="height:30px;font-size:14pt;" type="text" placeholder="Username" name="username" required> <br><br>
				<input style="height:30px;font-size:14pt;" type="password" placeholder="****" name="password" id="password" required><br><br>
				<input style="height:30px;font-size:14pt;" type="password" placeholder="****" name="confirm_password"id="confirm_password"required><br><br>
				<input type="submit" name="submit" class="btn btn-dark">
				</form>
			</div>       
		</div>

    </div>
	<script>
		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
</script>
	
        
</body>
</html>
