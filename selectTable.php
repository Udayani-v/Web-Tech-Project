<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Databases</title>
</head>
<body>
<?php
extract($_GET);

	//Make sure some ISBN is sent
	if($table==""||$dbname=="")
	{
		echo "<h2>OOPS...PLEASE ENTER TABLE NAME..</h2>";
		exit(0);
	}
	
	else
	{
		$conn = mysql_connect("127.0.0.1","root","");
		if(!$conn)
		{
			die("Could not establish connection to MYSQL");
		}
		else{
		
			$db=mysql_select_db($dbname, $conn);
			$sql="SELECT * FROM $table";

			if(!$db)
			{
				
				die("Cannot connect to DB".mysql_error());
			}
			else{
				$results=mysql_query($sql, $conn);
				if(!$results)
				{
					//echo"col1 is".$tablename;
					die("Cannot get data".mysql_error());
				}
				else{
				
					$row = mysql_fetch_row($results);
		if($row)
		{
			echo "<table border='2' cellspacing='2' cellpadding='6'>";
			echo "<tr style='background-color:grey;'><th>FIRST NAME</th><th>LAST NAME</th><th>AGE</th>";
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		else
		{
			echo "<h2>Sorry. No matching records</h2>";
		}
				}
			}
		}
	//conn.close();	
	}
	ob_flush();
	flush();
?>	