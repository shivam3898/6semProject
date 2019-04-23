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
</head>

<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
			<h1>YOUR ACCOUNT</h1>
			<p style="font-size:20px"><b>UserName : </b><?php echo"".$username;?></p>
			<button onclick="window.location.href='games.php';">Go To Games</button>
			<h1>YOUR High Scores</h1><br>
			<table>
				<tr>
					<th>Snake</th>
					<th>Tetris</th>
					<th>Box</th>
				</tr>
				<tr>
					<td><?php echo"".$snake;?></td>
					<td><?php echo"".$tetris;?></td>
					<td><?php echo"".$box;?></td>
				</tr>
			
			</table>
			<button onclick="window.location.href = 'logout.php';">LOGOUT</button>
        </div>
		</div>
	

        
</body>
</html>
