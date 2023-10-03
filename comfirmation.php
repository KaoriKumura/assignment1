<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Registration comfirmation</title>
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caudex&family=Croissant+One&family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1>Registration comfirmed!</h1>
		</header>
		<main>

			<?php
                 $fname = $_GET['fname'];
                 $lname = $_GET['lname'];
                 $address = $_GET['address'];
                 $phone = $_GET['phone'];
                 $email = $_GET['email'];
                
				
				echo('<p>Thank You, '.$fname.' '.$lname.'.</br>
					First name: '.$fname.'</br>
					Last name: '.$lname.'</br>
					Address: '.$address.'</br>
					Phone: '.$phone.'</br>
					Email: '.$email.'</p>');

					$servername="localhost";
					$username="root";
					$password="";
					$database="assignment one";
		
					//creating a connection
		
					$conn=mysqli_connect($servername, $username, $password, $database);
		
					//die if connection failed
					if(!$conn)
					{
						die("Sorry, connection failed!!".mysqli_connect_error());
					}
					else
					{
						echo "Connection Sucessfull";
					}
		
					$sql="SELECT * FROM `registrations`";
					$result=mysqli_query($conn, $sql);
		
					//Find the number of records in the table
					$num=mysqli_num_rows($result);
					echo "<br/>";
					echo $num;
		
					//Display the records using if statement
		
					if($num>0)
					{
						$row=mysqli_fetch_assoc($result);
						echo "<br/>";
						echo var_dump($row);
						echo "<br/>";
		
						$row=mysqli_fetch_assoc($result);
						echo "<br/>";
						echo var_dump($row);
					}
					
					//display records using while statement
		
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<br/>";
						echo "Here is the records in the Table";
						echo "<br/>";
		
						echo "Frist name: " . $row['fname'] . "Last name: " . $row['lname'] . "Address: " . $row['address'] . "Phone number: " . $row['phone'] . "email: " .$row['email'];
						echo "<br/>";

					}
				
			?>
		</main>
</html>