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
	if($fname == ""||$lname==""||$age=="")
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
		
			$db=mysql_select_db("mydb", $conn);
			$sql="INSERT INTO persons(FirstName, LastName, Age)
			VALUES ('$fname','$lname','$age')";
			echo"New Data Added Successfully";
			if(!$db)
			{				
				die("Cannot connect to DB".mysql_error());
			}
			else{
				$qry=mysql_query($sql, $conn);
				if(!$qry)
				{
					die("Cannot insert data".mysql_error());
				}
			}
		}
	//conn.close();	
	}
	ob_flush();
	flush();
?>	