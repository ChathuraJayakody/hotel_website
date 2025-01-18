<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reach Out & View - Hotel</title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+IT+Moderna:wght@100..400&family=Sofia&display=swap" rel="stylesheet">
<style>

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        background-color: rgba(0, 43, 54, 0.7); 
        /*background-color: #002b36;*/
        color: white;
        padding: 10px 20px;
        z-index: 1000;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-sizing: border-box;
    }

   
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    


    main {
        padding: 2rem;
    }

    section {
        margin-bottom: 2rem;
    }

    h2 {
        border-bottom: 2px solid #333;
        padding-bottom: 0.5rem;
        margin-bottom: 1rem;
    }

    .contact-details p {
        margin: 0.5rem 0;
    }

    .social-media {
        margin-top: 1rem;
    }

    .social-media .social-icon {
        display: inline-block;
        padding: 0.5rem 1rem;
        margin: 0.5rem;
        color: #fff;
        text-decoration: none;
        border-radius: 0.3rem;
        transition: background-color 0.3s ease;
    }

    .social-icon.facebook {
        background-color: #3b5998;
    }

    .social-icon.twitter {
        background-color: #1da1f2;
    }

    .social-icon.instagram {
        background-color: #e4405f;
    }

    .social-icon.youtube {
        background-color: #ff0000;
    }

    .social-icon:hover {
        opacity: 0.8;
    }

  
    #view {
        text-align: center;
        padding: 20px;
    }

    .gallery {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }

  
    .gallery-item {
        position: relative;
        width: 300px;
        height: 200px; 
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

  
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .gallery-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

   
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .gallery-item {
        animation: fadeIn 1s ease-in;
    }

 
    .video-gallery {
        margin-top: 2rem;
    }

    video {
        width: 100%;
        border-radius: 0.5rem;
    }
    	

    .hotel-info {
        display: flex;
        justify-content: space-around;
        padding: 50px;
        background-color: #EEF0E5;
        flex-wrap: wrap;
    }

    .info-box {
        flex: 1;
        margin: 10px;
        padding: 80px;
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
		
  	
    .icons {
        display: flex;
        gap: 5px;
        justify-content: center;
                align-items: center;
        
    }

    .icon {
        width: 60px;
        height: 60px;
        background-image: url('assets/images/css_sprites\ \(2\).png');
        background-size: 320px 80px; 
        cursor: pointer;
        transition: filter 0.3s ease;
    }

    .bg-facebook__1_ {
        background-position: -10px -10px;
    }

    .bg-instagram__1_ {
        background-position: -90px -10px;
    }

    .bg-youtube__1_ {
        background-position: -170px -10px;
    }

    .bg-W {
        background-position: -250px -10px;
    }


    .icon:hover {
        filter: grayscale(250%) contrast(400%) brightness(40%);
    }

		
		
		
		
 
    .slideshow-section {
        width: 100%;
        height: 400px; 
        overflow: hidden;
        position: relative;
        margin: 20px 0; 
    }

    .slideshow-container {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
    }

    .slide {
        min-width: 100%;
        height: 100%;
        transition: opacity 1s ease-in-out;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .fade {
        opacity: 0;
        position: absolute;
    }

  
    .active {
        opacity: 1;
    }

            
        .sofia-regular {
    font-family: "Sofia", system-ui;
    font-weight: 400;
    font-style: normal;
    }
        
            .icons {
        display: flex;
        gap: 5px;
        justify-content: center;
        align-items: center;
    }

    .icon {
        width: 60px;
        height: 60px;
        background-image: url('assets/images/css_sprites\ \(2\).png');
        background-size: 320px 80px; 
        cursor: pointer;
        transition: filter 0.3s ease;
    }

    .icon:hover {
        filter: grayscale(250%) contrast(400%) brightness(40%);
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
                    <li><a href="gallery1.php">Reach Out & See</a></li>
                    <li><a href="login.php">Sign in & Login</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <section id="reach-out">
            <div class="contact-details" >  
                <div class="icons" style="margin-top:90px;">
                    <div class="icon bg-facebook__1_" title="Facebook" onclick="window.open('https://www.facebook.com/', '_blank')"></div>
                    <div class="icon bg-instagram__1_" title="Instagram" onclick="window.open('https://www.instagram.com/', '_blank')"></div>
                    <div class="icon bg-youtube__1_"title="YouTube" onclick="window.open('https://www.youtube.com/', '_blank')"></div>
                    <div class="icon bg-W" title="WhatsApp" onclick="window.open('https://web.whatsapp.com/', '_blank')"></div>
                </div>
	        </div>
	
		<section class="hotel-info">
            <div class="info-box">
                <div class="text-center">
                    <pre><p class="sofia-regular" style="color:#3C3D37; font-size:25px;text-align:center;">
                        Indulge in opulence at our luxurious hotel, 
                        where every detail is crafted to
                        transform your stay into an unforgettable 
                        experience of elegance and comfort.
                    </p><pre>
                </div>

                <div class="photo-gallery">
                    <div class="gallery-slider">
                        <img src="assets/images/8.jpg" alt="Elegant Interiors Photo 1">
                        <img src="assets/images/9.jpg" alt="Elegant Interiors Photo 2">
                        <img src="assets/images/10.jpg" alt="Elegant Interiors Photo 3">
                    </div>
                </div>
            </div>
        </section>

        <section id="view">
            <h2 style="color:#3C3D37;" class="sofia-regular">----  GALLERY  ----</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="assets/images/1.jpg" alt="Hotel Room 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/2.png" alt="Hotel Room 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/3.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/Room.jpeg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/40.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/room3.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/4.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/5.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/6.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/7.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/8.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/9.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/10.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/12.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/20.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/36.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/14.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/15.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/16.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/17.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/18.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/19.png" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/21.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/30.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/31.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/32.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/33.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/34.jpg" alt="Hotel Room 3">
                </div>
				 <div class="gallery-item">
                    <img src="assets/images/35.jpg" alt="Hotel Room 3">
                </div>
             
                <div class="gallery-item">
                    <img src="assets/images/4.jpg" alt="Hotel Room 4">
                </div>
           
            </div>
        </section>

        <div class="video-gallery">
            <video controls>
                <source src="assets/videos/h.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </main>
	

    <section class="slideshow-section">
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="assets/images/22.jpg" alt="Slide 1">
            </div>
            <div class="slide fade">
                <img src="assets/images/23.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="assets/images/24.jpg" alt="Slide 3">
            </div>
            <div class="slide fade">
                <img src="assets/images/25.jpg" alt="Slide 3">
            </div>
            <div class="slide fade">
                <img src="assets/images/28.jpeg" alt="Slide 3">
            </div>
            <div class="slide fade">
                <img src="assets/images/39.jpg" alt="Slide 3">
            </div>
       
        </div>
    </section>
	<script>
	    document.addEventListener('DOMContentLoaded', function() {
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlides() {
          
            slides.forEach((slide) => {
                slide.classList.remove('active');
            });

       
            slides[slideIndex].classList.add('active');

         
            slideIndex = (slideIndex + 1) % totalSlides;
            setTimeout(showSlides, 3000);
        }

        showSlides();
        });

        document.addEventListener('DOMContentLoaded', () => {
            console.log('Reach Out & View page loaded');
        });

    </script>

 
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

