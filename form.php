<?php
	extract($_POST);
	setcookie("Team",$team);
?>
<html>
	<head>
	</head>
	<body>
		<form method="post" action="form2.php">
			<input type="text" name="cricketer">
			<input type="submit" value="submit">
		</form>
	</body>
</html>
