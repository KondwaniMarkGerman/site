<!DOCTYPE html>
<html>
<head>
		<title>Air Pollution Awareness</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
<body>
    <div class="setup">
	<h1 id="setup_h1">LOAD THE AIR POLLUTION SITE</h1>
	
    
    <form id="setup-form" action="setup.php" method="POST">
		<input type="submit" name="setup_btn" value="CREATE DATABASE"/>
	</form>

	<?php
	    if(isset($_POST['setup_btn']))
			{
				$conn = mysqli_connect("localhost","root","");
				
				$create_db = "CREATE DATABASE air_pollution";
				
				if(mysqli_query($conn,$create_db))
					
				{
					echo "AIR POLLUTION DATABASE HAS BEEN CREATED SUCCESSFULLY";
					mysqli_select_db($conn,"air_pollution");
				
					$users = "CREATE TABLE users( user_id int(10) auto_increment primary key, 
							fullname varchar(50),
							email varchar (200),
							date_of_birth date, 
							postal_address varchar(100), 
							postcode varchar(10),
							username varchar(25), 
							password varchar(255))";
	

					if(mysqli_query($conn,$users))
						{
							echo "Users Table Created Successfully";
						}
					
					header("location: pages/index.php");
				}
			else{
					echo "ERROR DATABASE ALREADY EXIST";
				}
				
				header("location: index.php");
		}
		
	?>
    </div>
</body>
</html>