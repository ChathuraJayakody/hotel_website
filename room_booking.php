<?php

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['nic']) && isset($_POST['checkin_date']) && isset($_POST['checkout_date']) && isset($_POST['guests']) && isset($_POST['room_type']) && isset($_POST['payment_option'])) {
 
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $checkin_date = $_POST['checkin_date'];
    $checkout_date = $_POST['checkout_date'];
    $guests = $_POST['guests'];
    $room_type = $_POST['room_type'];
    $payment_option = $_POST['payment_option'];


    $sql = "INSERT INTO room_bookings (full_name, email, nic, checkin_date, checkout_date, guests, room_type, payment_option) 
            VALUES ('$full_name', '$email', '$nic', '$checkin_date', '$checkout_date', '$guests', '$room_type', '$payment_option')";

if (mysqli_query($con, $sql)) {

    header('Location: '.$_SERVER['PHP_SELF'].'?status=success');
    exit();
} else {
    echo "error: " . mysqli_error($con);
}

} 


mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title class="cursive">Sha - Luxury Hotel</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="css/try10.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        a {
            text-decoration: none;
            color: palegoldenrod;
            font-size: 28px;
        }

        #login-form {
            display: block;
        }

        .form-box {
            width: 400px;
            height: 600px;
            position: relative;
            margin: 2% auto;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            overflow: hidden;
            border-radius: 15px;
        }

        .input-group-register {
            top: 50px;
            position: absolute;
            width: 280px;
            left: 50%;
            transform: translateX(-50%);
            transition: .5s;
        }

        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 10px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
            color: white;
            font-size: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0 auto;
            background: #F3C693;
            border: 0;
            outline: none;
            border-radius: 30px;
            font-size: 16px;
            color: #333;
        }

        .cursive-heading {
            font-family: 'Brush Script MT', cursive;
            font-size: 24px;
            color: lightgrey;
            text-align: center;
            margin-bottom: 20px;
            animation: fadeIn 3s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
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
        .back-button {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #F3C693;
        color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        z-index: 1000; 
        }

        .back-button:hover {
            background-color: #e0b96e;
        }
          
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="assets/videos/h1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <a href="services.php" class="back-button">Back</a>
    

    <div class="full-page">
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class="cursive-heading">Book Your Stay</div>
                <form id='roombooking' class='input-group-register' method="post" action="">
                    <input type='text' class='input-field' name='full_name' placeholder='Full Name' required>
                    <input type='email' class='input-field' name='email' placeholder='Email' required>
                    <input type='text' class='input-field' name='nic' placeholder='NIC No.' required>
                    <input type="text" id="checkin_date" class="input-field" name="checkin_date" placeholder="Check-in Date" required onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                    <input type="text" id="checkout_date" class="input-field" name="checkout_date" placeholder="Check-out Date" required onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                    <input type='number' class='input-field' name='guests' placeholder='Number of Guests' required>
                    <select name="room_type" class='input-field' required>
                        <option value="">Select Room Type</option>
                        <option value="single">Single Room</option>
                        <option value="double">Double Room</option>
                        <option value="suite">Suite</option>
                    </select>
                    <select name="payment_option" class='input-field' required>
                        <option value="">Select Payment Option</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="direct_pay">Direct Pay</option>
                    </select>
                    <button type='submit' class='submit-btn'>Book Now</button>
                </form>
                
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
  
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === 'success') {
            alert('Booking Successful!');
            }
        });

    </script>    
</body>
</html>
