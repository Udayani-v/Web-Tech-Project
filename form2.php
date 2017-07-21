<?php
	extract($_POST);
	setcookie("Name",$cricketer);
?>
<html>
	<head>
	</head>
	<body>
		<table>
			<?php
				
				foreach($_COOKIE as $key => $value)
					print("<tr><td>$key</td><td>$value</td></tr>");
			?>
		</table>
	</body>
</html>
