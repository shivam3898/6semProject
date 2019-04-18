<html>
<?php session_start(); ?>
<?php include_once("config.php"); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>
</head>

<body>
	
	
	<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        header("Location:http://localhost/6semProject/game.html");
    }
else{
    echo "Username not found";
}

?>
	
	
	
	
	
	
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.html">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	    
	</div>
    
	
	
	
	<div class="slideshow-container">
	<div class="mySlides fade">
	  <img src="a5.jpg" width="670" height="340">
	</div>
	<div class="mySlides fade">
	  <img src="rand5.jpg" width="670" height="340">
	</div>
	<div class="mySlides fade">
	  <img src="rand7.jpg" width="670" height="340">
	</div>
	<div class="mySlides fade">
	  <img src="rand1.jpg" width="670" height="340">
	</div>
	<div class="mySlides fade">
	  <img src="mainImage.png" width="670" height="340">
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
        	<h1>ANTHEM</h1>
          <div class="contentText">
		  <p style="font-size:20; color: black">Anthem is a platform for players all across to participate in various games and 
		  compete for the top spot in the leaderboard.
		  Join us today to start competing.<br> Already have an account? Sign in below.<br><br>
		  </p>
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
