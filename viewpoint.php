<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Registration table</title>
		<link rel="stylesheet" href="css/style.css">
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
				$database="assignmentOne";

                //creating a connection
		
				$conn=mysqli_connect($servername, $username, $password, $database);
		
				//die if connection failed
				 if(!$conn){
					die("Sorry, connection failed!!".mysqli_connect_error());
				 }
               
		
					$sql="SELECT * FROM registration";
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
            <li class="list-inline-item"><a href="index.php">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">© Kaori Kumura 2023</p>
    </footer> 
	</body>    
</html>