<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utr-8"/>
        <title>Online Registration</title>
        <meta name="author" content="Kaori Kumura">
        <meta name="description" content="Registration form">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caudex&family=Croissant+One&family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <nav>
        <li><img src="image/logo.png"></li>
        <ul>
            <ul class="menubar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Terms of Use</a></li>
                <input class="search" type="text" placeholder="Search..">
                <a class="move" href="viewpoint.php">Move to view the contents</a>
            </ul>
            </li>
        <ul>
    </nav>
    <body>
        <header>
            <h1>Registration</h1>
        </header>
        <main>
         <form action="index.php" method="post">
        <section>
            <div class="info">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" size="25" maxlength="50" placeholder="First Name"/>
            </div>
            <div class="info">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" size="25" maxlength="50" placeholder="Last Name"/>
            </div>
            <div class="info">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" size="30" maxlength="50">
            </div>
            <div class="info">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
            </div>
            <div class="info">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" maxlength="30">
            </div>  
        </section>

               <button type="reset">Reset</button>
               <button type="submit">Submit</button>
             </form>

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
         
             <?php
              if($_SERVER['REQUEST_METHOD']='POST')
              {  
                 $fname='';
                 $lname='';
                 $address='';
                 $phone='';
                 $email='';

                 if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']))
                 {
                     $fname=$_POST['fname'];
                     $lname=$_POST['lname'];
                     $address=$_POST['address'];
                     $phone=$_POST['phone'];
                     $email=$_POST['email'];
                 }
                //   $fname=$_POST['fname'];
                //   $lname=$_POST['lname'];
                //   $address=$_POST['address'];
                //   $phone=$_POST['phone'];
                //   $email=$_POST['email'];
                
                 //Database Connectivity
                 $servername="localhost";
                 $username="root";
                 $password="";
                 $database="assignment one";
     
                 //creating a connection
     
                 $conn=mysqli_connect($servername, $username, $password, $database);
                //  $sql="SELECT * from `registrations`";
                //  $registrations=mysqli_query($conn, $sql);
                
                 //die if connection failed
                 if(!$conn)
                 {
                     die("Sorry, connection failed!".mysqli_connect_error());
                 }
                 else
                 {
                     //submit the insertion queries/data to database
     
                     $sql="INSERT INTO `registrations` (`fname`, `lname`, `address`, `phone`, `email`)
                     VALUES ('$fname', '$lname', '$address', '$phone', '$email')";
                     $result=mysqli_query($conn, $sql);
     
                 }
                }
        
?>
    </body>
</html>