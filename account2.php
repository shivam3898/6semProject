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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.html">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
			<h1>YOUR ACCOUNT</h1>
			<p style="font-size:20px"><b>UserName : </b><?php echo"".$username;?></p>
			<button onclick="window.location.href='http://localhost/6semProject/games.php';">Go To Games</button>
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
			
        </div>
		</div>
	

        
</body>
</html>