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
       
       body,html {
            background-image: url('assets/images/w2.png');
            background-repeat:repeat; 
            background-position: cover;
            margin: 0;
            font-family: Arial, sans-serif;
			overflow-x: auto;
			padding: 0;
    height: 100%;
	background-color: #f4f4f4;
        }
		

      
        .service-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            flex-wrap: wrap;
            max-width: 1200px;
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 10px;
        }

     
        .service-card {
            width: 300px;
            height: 400px;
            perspective: 1000px;
            margin: 20px;
            transition: background-color 0.3s ease;
        }

        .service-card:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .service-card-inner {
            width: 100%;
            height: 100%;
            position: relative;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .service-card:hover .service-card-inner {
            transform: rotateY(180deg);
        }

        .service-card-front, .service-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            overflow: hidden;
        }

        .service-card-front {
            background-color: rgba(255, 255, 255, 0.9); 
        }

        .service-card-back {
            background-color: rgba(240, 240, 240, 0.9);
            transform: rotateY(180deg);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .service-card img {
            width: 100%;
            height: 70%;
            object-fit: cover;
        }

        .service-card h2 {
            text-align: center;
            padding: 10px;
        }

        .service-card p {
            padding: 10px;
            text-align: center;
        }

        .service-card button {
            background-color: #ff7f50;
            border: none;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .contact-section {
            background-color: rgba(249, 249, 249, 0.6); 
            padding: 50px 20px;
            text-align: center;
            border-top: 1px solid #ddd; 
            border-bottom: 1px solid #ddd;
        }

        .contact-section h2 {
            margin-top: 0;
            color: #333;
        }

        .contact-section form {
            max-width: 600px;
            margin: auto;
        }

        .contact-section label {
            display: block;
            margin: 10px 0 5px;
        }

        .contact-section input, .contact-section textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact-section button {
            background-color: #ff7f50;
            border: none;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

     
        .main-content {
            padding: 20px;
            background-color: #f4f4f4;
            min-height: 100vh; 
        }

        .section-padding {
            padding: 50px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .section-padding:last-child {
            border-bottom: none;
        }

    
        .section {
            padding: 50px 20px;
            text-align: center;
            max-width: 1200px;
            margin: auto;
            background-color: rgba(182, 196, 182, 0.6);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 40px;
        }

        .section:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .section img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .section img:hover {
            transform: scale(1.05);
        }

        .section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #1d1d1d;
        }

        .section p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #666;
            line-height: 1.6;
        }

        .learn-more {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 20px;
            background-color: #d4af37;
            color: #163020;
            text-transform: uppercase;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .learn-more:hover {
            background-color: #b79329;
        }

        .section-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .text-content, .image-content {
            flex-basis: 48%;
        }

        @media (max-width: 768px) {
            .section-content {
                flex-direction: column;
            }

            .text-content, .image-content {
                flex-basis: 100%;
                text-align: center;
            }
        }

        .images-section {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .images-section img {
            width: 30%;
            height: auto;
        }

            .sofia-regular {
        font-family: "Sofia", system-ui;
        font-weight: 400;
        font-style: normal;
        }
       
    </style>
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
                <li><a href="myprofile.php">My Profile</a></li>
				<li><a href="services.php">Services</a></li>
                
                
                <li><a href="gallery1.php">Reach Out & See</a></li>
                <li><a href="login.php" class="back-button">Logout</a></li>
            </ul>
        </nav>
    </header>
   
    <div class="section fade-in" style="margin-top:100px;">
        <h2>Unmatched Luxurious Experiences</h2>
        <p class="sofia-regular" style=" color:black;">
            At our five-star hotel, we are committed to providing the ultimate in luxury and comfort. Whether you're booking a room, planning a day out, hosting a pool party, or celebrating a wedding, our services are designed to offer you a mind-blowing experience. Indulge in the finest amenities and unparalleled service, ensuring that your time with us is nothing short of extraordinary.
        </p>
    </div>

 
    <div class="section fade-in">
        <div class="section-content">
            <div class="text-content">
                <h2>Our Services</h2>
                <b><p class="sofia-regular" style="color:black;">
                    Experience the ultimate luxury with our mind-blowing services designed to elevate your stay. From seamless room bookings and exciting day-out packages to vibrant pool parties and enchanting weddings, our five-star hotel ensures that every moment is unforgettable.
                </p></b>
            
            </div>
            <div class="image-content">
                <img src="assets/images/18.png" alt="Luxurious Hotel Services">
            </div>
        </div>
    </div>


   
    <section id="services" class="service-section">
        <div class="service-card" onclick="openBooking('room-booking')">
            <div class="service-card-inner">
                <div class="service-card-front">
                    <img src="assets/images/Room1.jpg" alt="Room Booking">
                    <h2>Room Booking</h2>
                </div>
                <div class="service-card-back">
                    <p>Book a luxurious room for your stay.</p>
                    <button onclick="window.location.href='room_booking.php'">Book Now</button>
                </div>
            </div>
        </div>

        <div class="service-card" onclick="openBooking('day-out')">
            <div class="service-card-inner">
                <div class="service-card-front">
                    <img src="assets/images/23.jpg" alt="Day Out">
                    <h2>Day Out</h2>
                </div>
                <div class="service-card-back">
                    <p>Enjoy a relaxing day out with us.</p>
                    <button onclick="window.location.href='dayout.php'">Book Now</button>
                </div>
            </div>
        </div>

        <div class="service-card" onclick="openBooking('pool-party')">
            <div class="service-card-inner">
                <div class="service-card-front">
                    <img src="assets/images/24.jpg" alt="Pool Party">
                    <h2>Pool Party</h2>
                </div>
                <div class="service-card-back">
                    <p>Celebrate with a pool party.</p>
                    <button onclick="window.location.href='poolparty.php'">Book Now</button>
                </div>
            </div>
        </div>

        <div class="service-card" onclick="openBooking('wedding')">
            <div class="service-card-inner">
                <div class="service-card-front">
                    <img src="assets/images/wedding05.jpg" alt="Wedding">
                    <h2>Wedding</h2>
                </div>
                <div class="service-card-back">
                    <p>Plan your dream wedding with us.</p>
                    <button onclick="window.location.href='wedding_booking.php'">Book Now</button>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
    <section id="images" class="images-section">
        <div class="image-container">
            <img src="assets/images/bg2.jpg" alt="Image 1">
            <img src="assets/images/bg3.jpg" alt="Image 2">
            <img src="assets/images/bg4.jpg" alt="Image 3">
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
    <script>
        let videoSlideIndex = 0;
        showVideoSlides();

        function showVideoSlides() {
            let i;
            let videoSlides = document.getElementsByClassName("video-slide");
            for (i = 0; i < videoSlides.length; i++) {
                videoSlides[i].style.opacity = "0";
            }
            videoSlideIndex++;
            if (videoSlideIndex > videoSlides.length) { videoSlideIndex = 1 }
            videoSlides[videoSlideIndex - 1].style.opacity = "1";
            setTimeout(showVideoSlides, 5000); 
        }
    </script>
</body>
</html>
