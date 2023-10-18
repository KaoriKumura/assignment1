<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utr-8" />
    <title>Online Registration</title>
    <meta name="author" content="Kaori Kumura">
    <meta name="description" content="Registration form">
    <link rel="stylesheet" href="css/style.css">
</head>
<nav>
    <li><img src="image/logo.png"></li>
    <ul>
        <ul class="menubar">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="viewpoint.php">Check registration table</a></li>
        </ul>
        </li>
        <ul>
</nav>

<body>
    <header>
        <h1>Registration</h1>
    </header>
    <main class="index">
        <form action="submit.php" method="post">
            <section>
                <div class="info">
                    <label for="id">ID</label>
                    <input type="id" name="id" id="id" placeholder="ID" />
                </div>
                <div class="info">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="First Name" />
                </div>
                <div class="info">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" />
                </div>
                <div class="info">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Address" />
                </div>
                <div class="info">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone" />
                </div>
                <div class="info">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" />
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
            <p class="copyright">© Kaori Kumura 2023</p>
        </footer>
    </div>

</body>

</html>