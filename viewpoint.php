<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Registration comfirmation</title>
		<link rel="stylesheet" href="css/style.css">
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
				
				$servername="localhost";
				$username="root";
				$password="";
				$database="assignment one";

                //creating a connection
		
				$conn=mysqli_connect($servername, $username, $password, $database);
		
				//die if connection failed
				if(!$conn){
					die("Sorry, connection failed!!".mysqli_connect_error());
				}else{
					echo "Connection Sucessfull";
				}
				 
				 
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
		
						echo "Frist name: " . $row['fname'] . "<br/>Last name: " . $row['lname'] . 
						 "<br/>Address: " . $row['address'] . "<br/>Phone number: " . $row['phone'] . "<br/>email: " .$row['email'];
						echo "<br/>";

					}
				
			?>
		</main>
		<div class="footer-basic">
    <footer>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Kaori Kumura © 2023</p>
    </footer> 
	</body>    
</html>