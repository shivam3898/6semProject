<html>
<head>
<?php include_once("config.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
	
	
	<p id="para"></p>
	<?php
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
		<div class="topNaviagationLink"><a href="account.html">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.html">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
        	<h1>Sign Up</h1><br><br>
          
		  
            <div>
        <h2>Fill details below.</h2><br>
		
	<form action="signup.php" method="post" >
	
	<div align="left" style="float: left" id="sdiv">
	Username*<br><br>Password*<br><br><br>Confirm Password*<br><br>

	</div>
	<div align="left" style="float: right" id="sdiv">
	<input style="height:30px;font-size:14pt;" type="text" placeholder="Username" name="username" required> <br><br>
		<input style="height:30px;font-size:14pt;" type="password" placeholder="****" name="password" id="password" required><br><br>
		<input style="height:30px;font-size:14pt;" type="password" placeholder="****" name="confirm_password" id="confirm_password"required><br><br>
       <input type="submit" name="submit" >
		</div>
	
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
