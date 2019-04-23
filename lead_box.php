<?php 
include_once("config.php");
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
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
			<h1><strong>COPTER</h1>
			<table class="table table-dark table-striped">
				<tr>
					<th>USERNAME</th>
					<th>SCORE</th>
					
				</tr>
				<tr>
					<td><?php echo"".$username_box[0];?></td>
					<td><?php echo"".$box[0];?></td>
					
				</tr>
				<tr>
					<td><?php echo"".$username_box[1];?></td>
					<td><?php echo"".$box[1];?></td>
					
				</tr>
				<tr>
					<td><?php echo"".$username_box[2];?></td>
					<td><?php echo"".$box[2];?></td>
					
				</tr>
				<tr>
					<td><?php echo"".$username_box[3];?></td>
					<td><?php echo"".$box[3];?></td>
					
				</tr>
				<tr>
					<td><?php echo"".$username_box[4];?></td>
					<td><?php echo"".$box[4];?></td>
					
				</tr>
			
			</table>
        </div>
		</div>
	
	

        
</body>
</html>



