<?php 
include_once("config.php");
$sql = "SELECT `snake`, username from `users` order by `snake` desc LIMIT 5";
$retval = $mysqli->query($sql);
	$username_snake=array();
	$snake=array();
	$i=0;
	while($row=mysqli_fetch_assoc($retval)){
		$snake[$i]=$row['snake'];
		$username_snake[$i]=$row['username'];
		$i=$i+1;
	}
$sql = "SELECT `tetris`, username from `users` order by `tetris` desc LIMIT 5";
$retval = $mysqli->query($sql);
	$username_tetris=array();
	$tetris=array();
	$i=0;
	while($row=mysqli_fetch_assoc($retval)){
		$tetris[$i]=$row['tetris'];
		$username_tetris[$i]=$row['username'];
		$i=$i+1;
	}
$sql = "SELECT `box`, username from `users` order by `box` desc LIMIT 5";
$retval = $mysqli->query($sql);
	$box=array();
	$username_box=array();
	$i=0;
	while($row=mysqli_fetch_assoc($retval)){
		$box[$i]=$row['box'];
		$username_box[$i]=$row['username'];
		$i=$i+1;
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
			<h1>LEADERBOARD</h1>
			<table>
				<tr>
					<th>Snake</th>
					<th>Tetris</th>
					<th>Box</th>
				</tr>
				<tr>
					<td><?php echo"".$snake[0];?></td>
					<td><?php echo"".$tetris[0];?></td>
					<td><?php echo"".$box[0];?></td>
				</tr>
				<tr>
					<td><?php echo"".$snake[1];?></td>
					<td><?php echo"".$tetris[1];?></td>
					<td><?php echo"".$box[1];?></td>
				</tr>
				<tr>
					<td><?php echo"".$snake[2];?></td>
					<td><?php echo"".$tetris[2];?></td>
					<td><?php echo"".$box[2];?></td>
				</tr>
				<tr>
					<td><?php echo"".$snake[3];?></td>
					<td><?php echo"".$tetris[3];?></td>
					<td><?php echo"".$box[3];?></td>
				</tr>
				<tr>
					<td><?php echo"".$snake[4];?></td>
					<td><?php echo"".$tetris[4];?></td>
					<td><?php echo"".$box[4];?></td>
				</tr>
			
			</table>
        </div>
		</div>
	
	

        
</body>
</html>



