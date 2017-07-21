<?php
	session_start();
	extract($_POST);
	$_SESSION["cricketer"] = $crick;
	print_r($_SESSION);
?>
<html>
	<head></head>
	<body>
		<table border="1">
			<tbody>
				<?php
					foreach($_SESSION as $key => $value)
						print("<tr><td>".$key."</td><td>".$value."</td></tr>");
				?>
			</tbody>
		</table>
	</body>
</html>
