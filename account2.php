<?php 
include_once("config.php");
session_start();
$username = $_SESSION['username'];
$sql="Select `snake`, `tetris`,`box` FROM `users` WHERE `username`='$username'";
$retval = $mysqli->query($sql);
	while($row=mysqli_fetch_assoc($retval)){
		$box=$row['box'];
		$snake=$row['snake'];
		$tetris=$row['tetris'];
	}



if(isset($_POST['upload'])){
	$_FILES['file']['name'] = $username."_image";
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc = $_FILES['file']['tmp_name'];
	$file_store = "uploads/".$file_name;
	
	if($file_type == 'image/jpg' or $file_type == 'image/png' or $file_type == 'image/jpeg'){
		move_uploaded_file($file_tem_loc, $file_store);
		$sql = "UPDATE `users` SET `image`='$file_name' WHERE `username`='$username'";
		$mysqli->query($sql);
	}else{
		echo"only images can be uploaded";
	}
}


$sql = "Select image from users where username='$username'";
$retval = $mysqli->query($sql);
$image = mysqli_fetch_assoc($retval);


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
			<h1><strong>YOUR ACCOUNT</strong></h1>
			<p style="font-size:20px; text-align: center"><b>UserName : </b><?php echo"".$username;?></p>
			<form action="account2.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="submit" name="upload" value="upload image">
			</form>
			<img src="<?php echo "uploads/".$image['image']; ?>">
			<h1>Your High Scores</h1><br>
			<table>
				<tr>
					<th>Snake &nbsp; &nbsp; &nbsp;</th>
					<th>Tetris &nbsp; &nbsp; &nbsp;</th>
					<th>Box</th>
				</tr>
				<tr>
					<td><?php echo"".$snake;?></td>
					<td><?php echo"".$tetris;?></td>
					<td><?php echo"".$box;?></td>
				</tr>
			
			</table>
			
			<button class="btn btn-primary" style="position: absolute; left:42%;" onclick="window.location.href='games.php';">PLAY NOW</button>
			
        </div>
		</div>
	

        
</body>
</html>
