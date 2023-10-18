<?php
    if ($_SERVER['REQUEST_METHOD'] = 'POST') {


        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];


        //Database Connectivity
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "assignmentOne";

        //creating a connection

        $conn = mysqli_connect($servername, $username, $password, $database);

        //die if connection failed
        if (!$conn) {
            die("Sorry, connection failed!" . mysqli_connect_error());
        } else {
            //submit the insertion queries/data to database

            $sql = "INSERT INTO registration (`id`, `fname`, `lname`, `address`, `phone`, `email`) 
                     VALUES ('$id', '$fname', '$lname', '$address', '$phone', '$email')";
                     
            $result = mysqli_query($conn, $sql);

            header("location: viewpoint.php");
        }
    }
    ?>
