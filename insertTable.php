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
	if($dbname == ""||$table==""||$col1data==""||$col2data==""||$col3data=="")
	{
		echo "<h2>OOPS...PLEASE ENTER ALL DETAILS..</h2>";
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
			$sql="INSERT INTO $table VALUES ('$col1data','$col2data','$col3data')";
echo $sql;
//$sql2="INSERT INTO a(ab, abc, abcd) VALUES (vr,rr,4)";
			if(!$db)
			{
				
				die("Cannot connect to DB".mysql_error());
			}
			else{
				$qry=mysql_query($sql, $conn);
				if(!$qry)
				{
					//echo"col1 is".$tablename;
					die("Cannot insert data".mysql_error());
				}
			}
		}
	//conn.close();	
	}
	ob_flush();
	flush();
?>	