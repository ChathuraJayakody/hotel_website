<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="cursive">Sha - Luxury Hotel</title>
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
		
		body {
            background-image: url('assets/images/w2.png');
            background-repeat:repeat;
            background-position: cover;
            margin: 0;
            font-family: Arial, sans-serif;
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
 
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
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
            color: #073642;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        .welcome-text p {
            font-size: 1.5rem; 
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
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
            
     
        .parallax-section {
            height: 50vh; 
            background-image: url('assets/images/25.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        
        .content-section {
            padding: 50px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }		
		
        
        .content-section {
            padding: 50px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

      
        .about-us-section {
            padding: 50px;
            background-color: #f4f4f4;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .about-us-section h2 {
            color: #1d1d1d;
            text-shadow: 2px 2px 8px gray; 
            font-size: 3em;
			text-align:center;
        }

        .about-us-section p {
            color: #666;
            line-height: 1.6;
            font-size:25px;
            text-shadow: 1px 1px 6px gray; 
			text-align:center;
			
        }
		
		
		
       
        .content-section {
            padding: 50px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0, 128, 0, 0.2); 
            margin-bottom: 40px;
            animation: slideUp 1s ease-in-out; 
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

       
        .content-section:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
		
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        table {
            width: 90%;
            max-width: 1000px;
            height: 400px; 
            border-collapse: collapse;
            background: linear-gradient(135deg, #697565, #3C3D37);
            border-radius: 10px;
            overflow: hidden;
            animation: fadeIn 2s ease-in-out;
        }

        thead {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
        }

        th, td {
            padding: 20px; 
            text-align: left;
            color: #ddd;
        }

        tbody tr:nth-child(even) {
            background: rgba(0, 0, 0, 0.2);
        }

        tbody tr:nth-child(odd) {
            background: rgba(0, 0, 0, 0.4);
        }

        tbody tr:hover {
            background: rgba(0, 0, 0, 0.6);
            cursor: pointer;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .sofia-regular {
        font-family: "Sofia", system-ui;
        font-weight: 400;
        font-style: normal;
        }

	</style>
</head>
<body>
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
    </header>
    
    <section class="parallax-section">
        
    </section>			
	
    
    <section class="content-section about-us-section">
        <h2>About Us</h2>
        <p class="sofia-regular">Sha Luxury Hotel offers an unparalleled experience of elegance and comfort in the heart of the city. Our hotel is designed to provide guests with an unforgettable stay, combining modern luxury with a touch of timeless sophistication. From our world-class amenities to our personalized services, we cater to your every need, ensuring that your stay with us is as relaxing and enjoyable as possible. Whether you're here for business or leisure, Sha Luxury Hotel is your perfect home away from home.</p>
    </section>

    <h1 class="sofia-regular" style="font-size:50px;text-align:center;">~~~Details~~~</h1>
    <div class="container">   
        <table >
            <thead>
                <tr >
                    <th style="text-align:center;">Board of Directors</th>
                    <th style="text-align:center;">Full Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chairperson of the Board</td>
                    <td>Mr.Chathura Vidanapathirana</td>
                </tr>
                <tr>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>Mr.Dulanjana Maduwantha</td>
                </tr>
                <tr>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>Ms.Hasini Gunasegara</td>
                </tr>
                <tr>
                    <td>Chief Operating Officer (COO)</td>
                    <td>Ms.Dinisi Wimasinka</td>
                </tr>
                <tr>
                    <td>Director of Marketing</td>
                    <td>Mr.Randeera Liyanage</td>
                </tr>
				 <tr>
                    <td>Director of Human Resources</td>
                    <td>Mrs.Fernando</td>
                </tr>
				<tr>
                    <td>Director of Technology</td>
                    <td>Mr.Nipum Nirmal</td>
                </tr>
				<tr>
                    <td>Director of Development</td>
                    <td>Ms.Amani</td>
                </tr>
				<tr>
                    <td>General Manager</td>
                    <td>Mr.Duboscq Herve</td>
                </tr>
            </tbody>
        </table>
    </div>
	<br>
	<br>
		
	
    <div class="section fade-in">
        <h2>City by the Sea</h2>
        <p class="sofia-regular" style=" color:black;">
            Colombo has a long history as an important port on the ancient east-west trade routes, reflected in the city's heritage architecture and unique culture. The city is buzzing with activity and visitors can enjoy discovering the best of local authentic cuisines, stylish cafés, boutiques, and galleries.
        </p>
    </div>

    <div class="section fade-in">
        <div class="section-content">
            <div class="text-content">
                <h2>Port City Colombo</h2>
                <p class="sofia-regular" style=" color:black;"> 
                    Port City Colombo is a modern, ambitious development project on reclaimed land along the coast of Colombo. Positioned to become South Asia’s premier financial hub, this futuristic city aims to blend business, lifestyle, and entertainment. With a focus on sustainability and innovation, Port City Colombo is set to redefine Colombo’s skyline and offer a vibrant space for international business, luxury living, and tourism.
                </p>
                <a href="https://en.wikipedia.org/wiki/Port_City_Colombo" class="learn-more">Learn More</a>
            </div>
            <div class="image-content">
                <img src="assets/images/portcity.jpg" alt="Dutch Hospital Precinct">
            </div>
        </div>
    </div>

  
    <div class="section fade-in">
        <div class="section-content">
            <div class="image-content">
                <img src="assets/images/lotus-tower.jpg" alt="Colombo City">
            </div>
            <div class="text-content">
                <h2>Lotus Tower</h2>
                <p class="sofia-regular" style=" color:black;">
                    The Lotus Tower, an iconic symbol of Sri Lanka, is the tallest structure in South Asia, standing at 350 meters. Located in Colombo, this architectural marvel serves as a communication tower and a major tourist attraction. Its unique lotus-flower design reflects the country's cultural heritage, and the tower offers breathtaking panoramic views of Colombo and beyond. The tower also houses a revolving restaurant, observation decks, and conference facilities, making it a multi-functional space for both locals and tourists.
                </p>
                <a href="https://en.wikipedia.org/wiki/Lotus_Tower" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>

    
    <div class="section fade-in">
        <div class="section-content">
            <div class="text-content">
                <h2>Gangaramaya Temple</h2>
                <p class="sofia-regular" style=" color:black;">
                    Gangaramaya Temple, nestled in the heart of Colombo, is one of the most significant and vibrant Buddhist temples in Sri Lanka. A blend of modern architecture and cultural heritage, the temple serves as a center for learning and meditation. It is renowned for its stunning interior, which houses a large collection of Buddha statues, relics, and artifacts from across Asia. The temple is also a focal point for the annual Navam Perahera, a grand procession that showcases Sri Lanka's rich religious traditions.
                </p>
                <a href="https://en.wikipedia.org/wiki/Gangaramaya_Temple" class="learn-more">Learn More</a>
            </div>
            <div class="image-content">
                <img src="assets/images/ganga.jpg" alt="Viharamahadevi Park">
            </div>
        </div>
    </div>
			
    
    <div class="section fade-in">
        <div class="section-content">
            <div class="image-content">
                <img src="assets/images/independence.jpg" alt="Colombo City">
            </div>
            <div class="text-content">
                <h2>Independence Square</h2>
                <p class="sofia-regular" style=" color:black;">
                    Independence Square in Colombo is a landmark commemorating Sri Lanka’s independence from British rule in 1948. The iconic Independence Memorial Hall, located here, is a symbol of freedom and national pride. Surrounded by lush gardens, the square is a popular spot for both locals and visitors to relax, exercise, and reflect on the country's history. The site also hosts various national events and cultural ceremonies, making it an essential part of Sri Lanka's heritage.
                </p>
                <a href="https://en.wikipedia.org/wiki/Independence_Memorial_Hall" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
		

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
                <img src="assets/images/14.png" alt="Slide 3">
            </div>
            <div class="slide fade">
                <img src="assets/images/16.png" alt="Slide 3">
            </div>
           
        </div>		
    </section>		
			
	
    <div class="section fade-in">
        <h2>Elevated luxurious Culture</h2>
        <h3>in the heart of Colombo</h3>
        <p class="sofia-regular" style=" color:black;">
            Experience the vibrant essence of Sri Lankan culture right in the heart of Colombo. From the rhythmic beats of Kandyan dance to the rich flavors of traditional cuisine, Colombo offers a unique blend of modernity and heritage. Explore historic temples, bustling markets, and cultural landmarks like Independence Square, where the island's rich history and traditions come to life. Whether it's savoring a local dish or witnessing a traditional performance, Colombo provides an immersive cultural experience that captures the spirit of Sri Lanka.
        </p>
    </div>

    
    <div class="section fade-in">
        <div class="section-content">
            <div class="text-content">
                <h2>Kandyan Dance</h2>
                <p class="sofia-regular" style=" color:black;">
                    
                    Kandyan dance is a traditional dance form that originated in the central hills of Sri Lanka. Known for its intricate footwork, elaborate costumes, and powerful rhythms, this dance is a vibrant expression of Sri Lankan culture. The dancers, often adorned in elaborate headpieces and jewelry, perform with dynamic movements that reflect the stories of gods, heroes, and ancient rituals. Kandyan dance is an integral part of cultural festivals and ceremonies, showcasing the artistic heritage of the island.
                </p>
                <a href="https://en.wikipedia.org/wiki/Kandyan_dance" class="learn-more">Learn More</a>
            </div>
            <div class="image-content">
                <img src="assets/images/kandydance.jpg" alt="Dutch Hospital Precinct">
            </div>
        </div>
    </div>

   
    <div class="section fade-in">
        <div class="section-content">
            <div class="image-content">
                <img src="assets/images/sl-food.jpg" alt="Colombo City">
            </div>
            <div class="text-content">
                <h2>Sri Lankan Food</h2>
                <p class="sofia-regular" style=" color:black;">
                    Sri Lankan cuisine is a flavorful journey through a rich blend of spices, fresh ingredients, and cultural influences. From the aromatic rice and curry dishes to the mouthwatering hoppers and sambols, the food reflects the island's diverse heritage. Each dish is a symphony of taste, often featuring coconut, chili, and a variety of herbs and spices. Whether it’s a traditional meal in a village home or a lavish feast in a five-star hotel, Sri Lankan food offers a unique culinary experience that is both satisfying and unforgettable.
                </p>
                <a href="https://en.wikipedia.org/wiki/Sri_Lankan_cuisine" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
    		
    
    <div class="section fade-in">
        <h2>Convenient Transport Options Near Our Hotel</h2>
        
        <p class="sofia-regular" style=" color:black;">
                Our hotel is conveniently located near major highways and public transport, making it easy to explore the city and reach key destinations. With quick access to the airport via the nearby expressway and readily available local transport options, you’ll always be connected to your next stop.
        </p>
    </div>

 
    <div class="section fade-in">
        <div class="section-content">
            <div class="text-content">
                <h2>Katunayake Airport</h2>
                <p class="sofia-regular" style=" color:black;">
                    Bandaranaike International Airport, commonly known as Katunayake Airport, is Sri Lanka's main international gateway, located approximately 30 kilometers north of Colombo. As the busiest airport in the country, it connects Sri Lanka with destinations around the world, serving millions of passengers annually. The airport offers a range of facilities, including duty-free shopping, restaurants, and lounges, ensuring a comfortable experience for travelers. Its strategic location makes it a key transport hub for both business and leisure travelers visiting the island.  
            
                </p>
                <a href="https://en.wikipedia.org/wiki/Bandaranaike_International_Airport" class="learn-more">Learn More</a>
            </div>
            <div class="image-content">
                <img src="assets/images/airport.jpg" alt="Dutch Hospital Precinct">
            </div>
        </div>
    </div>

    
    <div class="section fade-in">
        <div class="section-content">
            <div class="image-content">
                <img src="assets/images/highway.jpg" alt="Colombo City">
            </div>
            <div class="text-content">
                <h2>Colombo Highway</h2>
                <p class="sofia-regular" style=" color:black;">
                The Colombo Highway, particularly the Colombo-Katunayake Expressway, is a vital artery that connects Colombo with Bandaranaike International Airport. This modern highway significantly reduces travel time between the capital city and the airport, enhancing the efficiency of transport for both locals and tourists. The highway is well-maintained, offering a smooth and scenic drive with views of the lush Sri Lankan landscape. It is an essential part of the country's infrastructure, supporting economic growth and tourism development.

                </p>
                <a href="https://en.wikipedia.org/wiki/E03_expressway_(Sri_Lanka)" class="learn-more">Learn More</a>
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
    </div>
<script>
    let slideIndex = 0;
    showSlides();
    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("slide");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.opacity = "0";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.opacity = "1";  
        setTimeout(showSlides, 3000); 
    }
</script>	
</body>
</html>