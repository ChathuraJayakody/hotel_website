<?php

    $con = mysqli_connect('localhost', 'root', '', 'hotel');
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    }


    $selectedLanguage = isset($_POST['language']) ? $_POST['language'] : '';

    $data = '';

    if ($selectedLanguage) {
    
        $stmt = $con->prepare("SELECT * FROM instructors WHERE language = ?");
        $stmt->bind_param("s", $selectedLanguage);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data .= '<div style="border: 1px solid #ccc; padding: 15px; margin: 1px 0; border-radius: 10px; background-color:  #b4b4b4;">';
                $data .= "<p><strong>Instructor Name:</strong> " . htmlspecialchars($row['instructor_name']) . "</p>";
                $data .= "<p><strong>Phone Number:</strong> " . htmlspecialchars($row['phone_number']) . "</p>";
                $data .= '</div>'; 
            }
        } else {
            $data = "No records found.";
        }

        $stmt->close();
    }

    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="cursive">Sha - Luxury Hotel</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="css/styles.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+IT+Moderna:wght@100..400&family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+IT+Moderna:wght@100..400&family=Sofia&display=swap" rel="stylesheet">
    <style>
      
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
			max-height:100vh;
			max-width:100vw;
            overflow-x: hidden;
            font-family: 'Lora', serif; 
            background-color: #f4f4f4;
        }

     
        #loading-screen {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        #loading-screen img {
            width: 100px;
            height: auto;
            animation: rotate 2s linear infinite;
        }

        #content {
            transition: filter 0.5s ease;
        }

        .blur {
            filter: blur(5px);
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

     

        .video-section {
            position: relative;
            height: 100vh; 
            width: 100vw; 
            overflow: hidden;
        }

        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh; 
            object-fit: cover;
            z-index: 1;
        }		

        .welcome-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 1;
        }

        .welcome-text h2 {
            font-size: 3rem; 
            margin: 0;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        .welcome-text p {
            font-size: 1.5rem; 
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

    
        .availability-portal {
            padding: 20px;
            background-color: #EEF0E5;
            text-align: center;
            margin-top: -50px;
            position: relative;
            z-index: 5;
        }

        .availability-portal form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .availability-portal label {
            margin-right: 10px;
            color: #586e75;
            font-weight: bold;
        }

        .availability-portal input, .availability-portal select {
            padding: 10px;
            margin-right: 10px;
            border-radius: 4px;
            border: 1px solid #93a1a1;
            background-color: #fdf6e3;
            color: #586e75;
        }

        .availability-portal button {
            padding: 10px 20px;
            background-color: #073642;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .availability-portal button:hover {
            background-color: #268bd2;
        }

        .hotel-info {
            display: flex;
            justify-content: space-around;
            padding: 120px;
            background-color: #EEF0E5;
            flex-wrap: wrap;
        }

        .info-box {
            flex: 1;
            margin: 20px;
            padding: 70px;
            background-color: #B6C4B6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden; 
        }

        .info-box h3 {
            margin-top: 0;
            color: #163020;
            font-size: 1.5rem;
        }

        .info-box p {
            color: #586e75;
            font-size: 1rem;
        }

        .info-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

  
        .photo-gallery {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            height: 300px;
            margin: auto;
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .gallery-slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .gallery-slider img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }


        @keyframes swipe {
            0% { transform: translateX(0); }
            25% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            100% { transform: translateX(0); }
        }

        .photo-gallery:hover .gallery-slider {
            animation: swipe 12s infinite;
        }
 

        .language-selector {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        .language-selector select {
            padding: 10px;
            border-radius: 5px;
            border: none;
            /* background-color: black; */
            color: white;
            cursor: pointer;
            appearance: none;
            /* background: url('icon.png') no-repeat right; */
            background-size: 20px;
            padding-right: 30px;
        }

        .language-selector select:hover {
            background-color: #268bd2;
        }

        .instructor-popup {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #add8e6;
            padding: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            z-index: 2000;
            width: 50%;
            max-width: 600px;
            text-align: center;
            animation: none; 
        }

 
        .instructor-popup h3 {
            margin-top: 0;
            color: #333;
            font-size: 1.8rem;
            font-weight: bold;
        }


        .instructor-popup p {
            color: #000;
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .sofia-regular {
        font-family: "Sofia", system-ui;
        font-weight: 400;
        font-style: normal;
        }
        
	
        select {
            background-color: transparent;
            color: white;
            border: none;
            outline: none;
            appearance: none; 
            -webkit-appearance: none; 
            padding: 10px;
            font-size: 15px;
        }

       
        select option {
            background-color: black; 
            color: white;
        }

        
        select::-ms-expand {
            display: none;
        }
	
        .overlay {
            display: none; 
            position: fixed; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.5); 
            z-index: 1000;
        }

        .popup {
            background-color: #fff;
            margin: 15% auto;
            padding: 10px;
            border: 1px solid #888;
            width: 80%; 
            max-width: 600px;
            border-radius: 10px;
        }


        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .check-availability-popup {
            background-color: #ededed;
            padding: 20px;
            border: 10px solid #888;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            text-align: center;
            position: relative;
            top: 20%;
            left: 10%;
            transform: translate(-10%, -20%);
            z-index: 2000;
        }

        .check-availability-popup h2 {
            margin-top: 0;
            color: #333;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .check-availability-popup ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .check-availability-popup li {
            padding: 8px;
            font-size: 18px;
        }

        .available {
            color: green;
        }

        .unavailable {
            color: red;
        }

        .checking {
            color: orange;
            font-style: italic;
        }

        .overlay {
            display: none; 
            position: fixed; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.5); 
            z-index: 1000;
        }

        .popup .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .popup .close:hover,
        .popup .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div id="loading-screen">
        <img src="assets/images/icon.png" alt="Loading">
    </div>

    <div id="content" class="blur">
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
                <li><a href="login.php">Sign in & Login</a></li>   
            </ul>
        </nav>
        
        <form method="POST" action="">
            <div class="language-selector">
                <select id="language" name="language" onchange="submitForm()">
                    <option value="" disabled <?php echo $selectedLanguage == '' ? 'selected' : ''; ?>>Select Language</option>
                    <option value="english" <?php echo $selectedLanguage == 'english' ? 'selected' : ''; ?>>English</option>
                    <option value="tamil" <?php echo $selectedLanguage == 'tamil' ? 'selected' : ''; ?>>Tamil</option>
                    <option value="sinhala" <?php echo $selectedLanguage == 'sinhala' ? 'selected' : ''; ?>>Sinhala</option>
                    <option value="chinese" <?php echo $selectedLanguage == 'chinese' ? 'selected' : ''; ?>>Chinese</option>
                    <option value="french" <?php echo $selectedLanguage == 'french' ? 'selected' : ''; ?>>French</option>
                </select>
            </div>
        </form>		
    </header>
		
    <div id="myModal" class="overlay">
        <div class="popup instructor-popup" style="background-color: #3c3b3b;">
            <div id="popupContent">
                <?php echo $data; ?>
            </div>
        </div>
    </div>


    <script>

        function submitForm() {
            document.querySelector('form').submit();
        }

        function showPopup() {
            document.getElementById('myModal').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('myModal').style.display = 'none';
        }

  
        <?php if ($selectedLanguage): ?>
            window.onload = function() {
                showPopup();
            };
        <?php endif; ?>

        window.addEventListener('load', function() {
            document.getElementById('loading-screen').style.display = 'none';
            document.getElementById('content').classList.remove('blur');
        });

     
        function closePopup() {
            document.getElementById('myModal').style.display = 'none';
        }

    
        document.getElementById('myModal').addEventListener('click', function(event) {
       
            if (event.target === this) {
                closePopup();
            }
        });

    
        function openCheckAvailabilityPopup() {
            const checkInDate = document.getElementById('check-in').value;
            const checkOutDate = document.getElementById('check-out').value;
            const numberOfGuests = document.getElementById('guests').value;

            if (!checkInDate || !checkOutDate) {
                alert("Please fill in both Check-in and Check-out dates.");
                return;
            }

            if (isNaN(numberOfGuests) || numberOfGuests <= 0) {
                alert("Please enter a valid number of guests.");
                return;
            }

            document.getElementById('checkAvailabilityModal').style.display = 'block';

            document.getElementById("room-status").innerText = "Checking...";
            document.getElementById("room-status").className = "";

            document.getElementById("day-out-status").innerText = "Checking...";
            document.getElementById("day-out-status").className = "";

            document.getElementById("pool-party-status").innerText = "Checking...";
            document.getElementById("pool-party-status").className = "";

            document.getElementById("wedding-status").innerText = "Checking...";
            document.getElementById("wedding-status").className = "";

            setTimeout(() => {
 
                const roomAvailable = Math.random() > 0.5 ? "Available" : "Unavailable";
                const dayOutAvailable = Math.random() > 0.5 ? "Available" : "Unavailable";
                const poolPartyAvailable = Math.random() > 0.5 ? "Available" : "Unavailable";
                const weddingAvailable = Math.random() > 0.5 ? "Available" : "Unavailable";

                document.getElementById("room-status").innerText = roomAvailable;
                document.getElementById("room-status").className = roomAvailable.toLowerCase();

                document.getElementById("day-out-status").innerText = dayOutAvailable;
                document.getElementById("day-out-status").className = dayOutAvailable.toLowerCase();

                document.getElementById("pool-party-status").innerText = poolPartyAvailable;
                document.getElementById("pool-party-status").className = poolPartyAvailable.toLowerCase();

                document.getElementById("wedding-status").innerText = weddingAvailable;
                document.getElementById("wedding-status").className = weddingAvailable.toLowerCase();

            }, 2000); 
        }

        function closeCheckAvailabilityPopup() {
            document.getElementById('checkAvailabilityModal').style.display = 'none';
        }

        document.getElementById('checkAvailabilityModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeCheckAvailabilityPopup();
            }
        });

    </script>

    <section class="video-section">
        <video id="background-video" autoplay loop muted>
            <source src="assets/videos/h10.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="welcome-text">
            <h2>Welcome to Sha Luxury Hotel</h2>
            <p>Experience luxury like never before</p>
        </div>
    </section>

    <section class="availability-portal">
        <form action="availability.php" method="POST">
            <label for="check-in">Check-In Date:</label>
            <input type="date" id="check-in" name="check-in" required>

            <label for="check-out">Check-Out Date:</label>
            <input type="date" id="check-out" name="check-out" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" required>

            <label for="nationality">Nationality:</label>
            <select id="nationality" name="nationality" required>
                <option value="sri-lankan">Sri Lankan</option>
                <option value="foreigner">Foreigner</option>
            </select>

            <button type="button" onclick="openCheckAvailabilityPopup()">Check Availability</button>
        </form>
    </section>

    <section class="hotel-info">
        <div class="info-box">
            <h3>Elegant Interiors</h3>
            <div class="photo-gallery">
                <div class="gallery-slider">
                    <img src="assets/images/8.jpg" alt="Elegant Interiors Photo 1">
                    <img src="assets/images/9.jpg" alt="Elegant Interiors Photo 2">
                    <img src="assets/images/10.jpg" alt="Elegant Interiors Photo 3">
                </div>
            </div>
            <p>Our hotel boasts exquisitely designed interiors that blend modern luxury with timeless elegance, creating a serene and luxurious ambiance for our guests.</p>
        </div>
        <div class="info-box">
            <h3>Gourmet Dining</h3>
            <div class="photo-gallery">
                <div class="gallery-slider">
                    <img src="assets/images/4.jpg" alt="Elegant Interiors Photo 1">
                    <img src="assets/images/5.jpg" alt="Elegant Interiors Photo 2">
                    <img src="assets/images/6.jpg" alt="Elegant Interiors Photo 3">
                </div>
            </div>
            <p>Experience world-class cuisine at our gourmet restaurants, where our chefs craft delectable dishes using the freshest ingredients.</p>
        </div>
        <div class="info-box">
            <h3>Prime Location</h3>
            <div class="photo-gallery" height="300px">
                <div class="gallery-slider">
                    <img src="assets/images/7.jpg" alt="Elegant Interiors Photo 1">
                    <img src="assets/images/1.jpg" alt="Elegant Interiors Photo 2">
                    <img src="assets/images/2.png" alt="Elegant Interiors Photo 3">
                    <img src="assets/images/3.png" alt="Elegant Interiors Photo 3">
                </div>
            </div>
            <p>Situated in the heart of the city, our hotel offers easy access to top attractions, shopping centers, and cultural landmarks.</p>
        </div>
        
    </section>


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
 
    <div id="checkAvailabilityModal" class="overlay">
        <div class="popup check-availability-popup">
            <span class="close" onclick="closeCheckAvailabilityPopup()">&times;</span>
            <h2>Availability Status</h2>
            <ul>
                <li>Room Booking: <span id="room-status">Checking...</span></li>
                <li>Day Out Booking: <span id="day-out-status">Checking...</span></li>
                <li>Pool Party: <span id="pool-party-status">Checking...</span></li>
                <li>Wedding: <span id="wedding-status">Checking...</span></li>
            </ul>
        </div>
    </div>
</body>
</html>
