<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Registration comfirmation</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caudex&family=Croissant+One&family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<h1 class="title">Registration Table</h1>
		</header>
		<main class="viewpoint">
			<table class="table">
				<thead>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Email</th>
				</thead>
				<tbody>

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
				 }
               
		
					$sql="SELECT * FROM `registrations`";
					$result=mysqli_query($conn, $sql);
		
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>
						<td>" . $row['id'] . "</td>
						<td>" . $row['fname'] . "</td>
						<td>" . $row['lname'] . "</td>
						<td>" . $row['address'] . "</td>
						<td>" . $row['phone'] . "</td>
						<td>" .$row['email'] . "</td>

					</tr>";

					}
			?>
				</tbody>
			</table>
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
