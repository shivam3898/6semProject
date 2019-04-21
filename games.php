<?php 
include_once("config.php");
session_start();
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
		<div class="topNaviagationLink"><a href="account2.php">ACCOUNT</a></div>     
        <div class="topNaviagationLink"><a href="leaderboard.php">LEADERBOARD</a></div>
        <div class="topNaviagationLink"><a href="about.html">ABOUT</a></div>
	</div>

        <div class="contentBox">
    	<div class="innerBox">
			<h1>GAMES</h1>
			<a href="games/snake.php"><img src="sn.png"></a>
			<a href="games/tetris/index.html"><img src="tt.png"></a>
			<a href="games/box.php"><img src="co.png"></a>
			
        </div>
		</div>
	
	

        
</body>
</html>
