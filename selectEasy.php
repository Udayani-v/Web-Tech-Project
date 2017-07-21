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

		
		
			//Connecting to SQL Server
			$conn = mysql_connect("127.0.0.1","root","");
			if(!$conn)
			{
				die("Could not establish connection to MYSQL");
			}
			else
			{
				//Select DB from MySQL
				$db=mysql_select_db("mydb", $conn);
				$sql="SELECT * FROM persons";
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
						$check_num_rows=count($row);
						echo "NO OF ROWS".$check_num_rows;
			if($row)
			{
				echo "<table border='2' cellspacing='2' cellpadding='6'>";
				echo "<tr style='background-color:grey;'><th>FIRST NAME</th><th>LAST NAME</th><th>AGE</th>";
				echo "<tr>";
				$i=1;
				foreach($row as $value)
				{
					
					echo "<td>" . $value.$i++ . "</td>";
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
			
		//conn.close();	
		}
		ob_flush();
		flush();
	?>	