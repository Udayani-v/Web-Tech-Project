<?php
	extract($_POST);
	session_start();
	$_SESSION["Team"] = $team;
	$_SESSION["cricketer"] = $crck;
?>
<html>
	<head>
	</head>
	<body>
		<form method="post" action="page3.php">
			Enter favorite cricketer:<input type="text" name="crick">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
