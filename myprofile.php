<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

$name = $user['username'];
$nic = $user['nic'];
$phoneNumber = $user['phone_number'];  
$feedback = $user['feedback'];  

mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="cursive">Sha - Luxury Hotel</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="css/myprofile.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  
    <header>
        <div class="logo-container">
            <img src="assets/images/icon.png" alt="Sha Logo" class="logo">
            <h1 class="sofia-regular" style="color: #ccd6cd;">Sha Luxury Hotel</h1>
        </div>
        <nav class="nav-bar">
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>        
                
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery1.php">Reach Out & See</a></li>
                
                <li><a href="login.php" class="back-button">Logout</a></li>
                
            </ul>
        </nav>
    </header>
    
    <div class="container">
     
        <div id="profileSection" class="section active">
            <h2 class="profileh2">My Profile</h2>
            <div class="profile-container">
                <div class="profile-img">
                    <img src="assets/images/profile.jpg" alt="Profile Image">
                </div>
                <div class="profile-info">
                    <form id="profileForm" method="post" action="update_profile.php" enctype="multipart/form-data">
                        <label for="name"><b>Name</b></label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

                        <label for="nic"><b>NIC</b></label>
                        <input type="text" id="nic" name="nic" value="<?php echo htmlspecialchars($nic); ?>">

                        <label for="email"><b>Email</b></label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

                        <label for="phoneNumber"><b>Phone Number</b></label>
                        <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($phoneNumber); ?>">    

                        <label for="feedback"><b>Feedback</b></label>
                        <textarea id="feedback" name="feedback" style="padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;"><?php echo htmlspecialchars($feedback); ?></textarea>

                        <button type="submit" class="btn">Update Profile</button>
                    </form>
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
    
</body>
</html>
