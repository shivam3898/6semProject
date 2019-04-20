<html>

<body>

<?php 
		$score=$_GET['score'];
		include_once("config.php");
		session_start();
		$username = $_SESSION['username'];
		$sql = "SELECT `tetris` FROM `users` WHERE `username`='$username'";
		$retval = $mysqli->query($sql);
		while($row=mysqli_fetch_assoc($retval)){
			if($score>$row['tetris']){
				$sql2="UPDATE `users` SET `tetris`=$score WHERE `username`='$username'";
				$mysqli->query($sql2);
			}
		}
?>

<script>
		var retVal = confirm("GAME OVER!!! \n Do you want to play again ?");
               if( retVal == true ) {
				   window.location.href="http://localhost/6semProject/games/index.html";
               } else {
				   window.location.href="http://localhost/6semProject/games.php";
               }

</script>
</body>
</html>
