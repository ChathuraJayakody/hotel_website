<?php
session_start();

if (isset($_POST['login'])) {

    $con = mysqli_connect('localhost', 'root', '', 'hotel');
    if (!$con) {
        die ('Could not connect: ' . mysqli_error($con));
    }

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
      
        $_SESSION['username'] = $user['username'];  
        $_SESSION['email'] = $user['email'];        
        $_SESSION['nic'] = $user['nic'];            
        
        header('Location: myprofile.php'); 
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }

    mysqli_close($con);
}


if (isset($_POST['register'])) {
  
    $con = mysqli_connect('localhost', 'root', '', 'hotel');
    if (!$con) {
        die ('Could not connect: ' . mysqli_error($con));
    }

   
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $query = "INSERT INTO users (username, email, nic, password) VALUES ('$username', '$email', '$nic', '$password')";

  
    
    
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Registration successful! You can now log in.');</script>";
    } else {
        echo "<script>alert('Registration failed: " . mysqli_error($con) . "');</script>";
    }

   
    mysqli_close($con);
}
?>




<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="cursive">Sha - Luxury Hotel</title>
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
    <link rel="stylesheet" href="css/styles.css">	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+IT+Moderna:wght@100..400&family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+IT+Moderna:wght@100..400&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">    
    
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="assets/images/icon.png" alt="Sha Logo" class="logo">
            <h1 class="sofia-regular">Sha Luxury Hotel</h1>
        </div>
        <nav class="nav-bar">
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li> 
                <li><a href="gallery1.php">Reach Out & See</a></li>
        </nav>        
    </header>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2 class="sofia-regular">LOGIN</h2>
                    <form method="POST" action="">
                        <input type="email" class="input-box" name="email" placeholder="your Email Id" required>
                        <input type="password" class="input-box" name="password" placeholder="Password" required>
                        <button type="submit" name="login" class="submit-btn">Submit</button>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                </div>
                <div class="card-back">
                    <h2 class="sofia-regular">REGISTER</h2>
                    <form method="POST" action="">
                        <input type="text" class="input-box" name="username" placeholder="Your Name" required>
                        <input type="email" class="input-box" name="email" placeholder="Your Email Id" required>
                        <input type="text" class="input-box" name="nic" placeholder="Your NIC" required>
                        <input type="password" class="input-box" name="password" placeholder="Password" required>
                        <button type="submit" name="register" class="submit-btn">Submit</button>    
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                </div>
            </div>
        </div>
    </div> 
 
    <footer>
        <div class="footer-content">
            <div class="about-us">
                <h3>About Us</h3>
                <p>Sha Luxury Hotel offers an unparalleled luxury experience, nestled in the heart of the city with world-class amenities and services tailored to your needs.</p>
            </div>
            <div class="contact-details">
                <h3>Contact Us</h3>
                <p>Email: info@sha-hotel.com</p>
                <p>Phone: 011-1122856</p>
                <p>Address: 123 Luxury St., Wellawatte, Colombo,Srilanka</p>
            </div>
            <div class="map">
                <h3>Our Location</h3>
                <iframe src="https://www.google.com/maps/embed?..." width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sha Luxury Hotel. All rights reserved.</p>
        </div>
    </footer>
    <script>
           var card = document.getElementById("card");

            function openRegister() {
                card.style.transform = "rotateY(-180deg)";
            }

            function openLogin() {
                card.style.transform = "rotateY(0deg)";
            }

            document.getElementById("myForm").addEventListener("submit", function(event) {
                event.preventDefault();
                window.location.href = "services.php"; 
            });
    </script>
</body>
</html>
    