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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ASS Gaming</title>

</head>

<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">HOME</a></div>
		<div class="topNaviagationLink"><a href="account2.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
			<!--
			<h1>LEADERBOARD</h1>
			<a href="lead_snake.php"><img src="sn.png"></a>
			<a href="lead_tetris.php"><img src="tt.png"></a>
			<a href="lead_box.php"><img src="co.png"></a>
			-->
			<!--
			<ul class="nav nav-pills" role="tablist">
				<li class="nav-item">
				  <a class="nav-link active" data-toggle="pill" href="#home" style="font-size:20px;">SNAKE</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="pill" href="#menu1" style="font-size:20px;">TETRIS</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="pill" href="#menu2" style="font-size:20px;">COPTER</a>
				</li>
			  </ul>
			  <div class="tab-content">
				<div id="home" class="container tab-pane active"><br>
					<table class="table table-dark table-striped">
						<tr>
							<th>USERNAME</th>
							<th>SCORE</th>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[0];?></td>
							<td><?php echo"".$snake[0];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[1];?></td>
							<td><?php echo"".$snake[1];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[2];?></td>
							<td><?php echo"".$snake[2];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[3];?></td>
							<td><?php echo"".$snake[3];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[4];?></td>
							<td><?php echo"".$snake[4];?></td>
							
						</tr>
					
					</table>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
						  <table class="table table-dark table-striped">
						<tr>
							<th>USERNAME</th>
							<th>SCORE</th>					
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[0];?></td>
							<td><?php echo"".$tetris[0];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[1];?></td>
							<td><?php echo"".$tetris[1];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[2];?></td>
							<td><?php echo"".$tetris[2];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[3];?></td>
							<td><?php echo"".$tetris[3];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[4];?></td>
							<td><?php echo"".$tetris[4];?></td>
							
						</tr>
					
					</table>
				</div>
				<div id="menu2" class="container tab-pane fade"><br>
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
			  -->
			  
			  <ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
				  <a class="nav-link active" data-toggle="tab" href="#home" style="font-size:20px; color:black;">SNAKE</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="tab" href="#menu1" style="font-size:20px; color:black;">TETRIS</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="tab" href="#menu2" style="font-size:20px; color:black;">COPTER</a>
				</li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div id="home" class="container tab-pane active"><br>
				  <table class="table table-dark table-striped">
						<tr>
							<th>USERNAME</th>
							<th>SCORE</th>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[0];?></td>
							<td><?php echo"".$snake[0];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[1];?></td>
							<td><?php echo"".$snake[1];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[2];?></td>
							<td><?php echo"".$snake[2];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[3];?></td>
							<td><?php echo"".$snake[3];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_snake[4];?></td>
							<td><?php echo"".$snake[4];?></td>
							
						</tr>
					
					</table>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
				  <table class="table table-dark table-striped">
						<tr>
							<th>USERNAME</th>
							<th>SCORE</th>					
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[0];?></td>
							<td><?php echo"".$tetris[0];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[1];?></td>
							<td><?php echo"".$tetris[1];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[2];?></td>
							<td><?php echo"".$tetris[2];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[3];?></td>
							<td><?php echo"".$tetris[3];?></td>
							
						</tr>
						<tr>
							<td><?php echo"".$username_tetris[4];?></td>
							<td><?php echo"".$tetris[4];?></td>
							
						</tr>
					
					</table>
				</div>
				<div id="menu2" class="container tab-pane fade"><br>
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
			
        </div>
		</div>
	
	

        
</body>
</html>
