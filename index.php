<?php session_start();
 ?>
<?php include_once("config.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/ico" href="favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="back.js"></script>
	<title>Anthem</title>
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
			$_SESSION['password'] = $password;
			header("Location:account2.php");
		}
		else{
			echo '<div class="alert alert-danger alert-dismissible fade show" style="text-align:center;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error!</strong> Username or password is invalid!  </div>';
		}
	}
?>
	
	 <!--<div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">HIGH_SCORE</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>	    
	</div>
	-->
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
		
	<div class="slideshow-container">
	<div class="mySlides faded">
	  <img src="a5.jpg" width="670" height="340">
	</div>
	<div class="mySlides faded">
	  <img src="rand5.jpg" width="670" height="340">
	</div>
	<div class="mySlides faded">
	  <img src="rand7.jpg" width="670" height="340">
	</div>
	<div class="mySlides faded">
	  <img src="rand6.jpg" width="670" height="340">
	</div>
	<div class="mySlides faded">
	  <img src="a1.jpg" width="670" height="340">
	</div>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

	
	
	
	
	
        <div class="contentBox">
    	<div class="innerBox">
        	<h1><strong>ANTHEM</strong></h1>
          <div class="contentText">
		  <p style="font-size:20; color: black">Anthem is a platform for players all across to participate in various games and 
		  compete for the top spot in the leaderboard.
		  Join us today to start competing.<br> Already have an account? Sign in below.<br><br>
		  </p>
		  <form action="index.php" method="post">  
		  <div id="sdiv2">
           <strong>USERNAME &nbsp;: <input style="height:30px;font-size:14pt;" type="text" placeholder="Username" name="username" required><br><br>
			PASSWORD : <input style="height:30px;font-size:14pt;margin-left:3px" type="password" placeholder="****" name="password" required>
			</div>
			</div> 
			<div style="position: absolute; left:42%; top:69%"><input type="submit" name="commit" value="Login" class="btn btn-dark"></div>
			<div style="position: absolute; left:55%; top:69%"><input type="button" value="Sign Up" onclick="window.location.href='signup.php'" class="btn btn-dark">
			</div>
			</form>
			
                  
        </div>
    </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}
</script>
	
	
	      
</body>
</html>
