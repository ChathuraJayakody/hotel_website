<?php

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['nic']) && isset($_POST['wedding_date']) && isset($_POST['guests']) && isset($_POST['additional_arrangements']) && isset($_POST['menu_preference']) && isset($_POST['payment_option'])) {
   
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $wedding_date = $_POST['wedding_date'];
    $guests = $_POST['guests'];
    $additional_arrangements = $_POST['additional_arrangements'];
    $menu_preference = $_POST['menu_preference'];
    $payment_option = $_POST['payment_option'];

  
    $sql = "INSERT INTO wedding_bookings (full_name, email, nic, wedding_date, guests, additional_arrangements, menu_preference, payment_option) 
            VALUES ('$full_name', '$email', '$nic', '$wedding_date', '$guests', '$additional_arrangements', '$menu_preference', '$payment_option')";

    if (mysqli_query($con, $sql)) {
   
        echo "<script>alert('Wedding Booking Successful!');</script>";
    } else {
    
        echo "<script>alert('Booking Failed: " . mysqli_error($con) . "');</script>";
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
            height: 610px;
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
            padding: 7px 0;
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
            padding: 10px 20px;
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
            <source src="assets/videos/wedding.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <a href="services.php" class="back-button">Back</a>


    <div class="full-page">
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class="cursive-heading">Book Your Wedding Party</div>
                <form id='weddingbooking' class='input-group-register' method="post" action="">
                    <input type='text' class='input-field' name='full_name' placeholder='Full Name' required>
                    <input type='email' class='input-field' name='email' placeholder='Email' required>
                    <input type='text' class='input-field' name='nic' placeholder='NIC No.' required>
                    <input type="text" id="checkin_date" class="input-field" name="wedding_date" placeholder="Wedding Date" required onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                    <input type='number' class='input-field' name='guests' placeholder='Number of Guests' required>
                    <textarea class='input-field' name='additional_arrangements' placeholder='Any special arrangements or requests' rows='4'></textarea>
                    
                    <select name="menu_preference" class='input-field' required>
                        <option value="">Select Menu Preference</option>
                        <option value="standard">Standard Menu</option>
                        <option value="vegetarian">Vegetarian Menu</option>
                        <option value="vegan">Vegan Menu</option>
                        <option value="custom">Custom Menu</option>
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
</body>
</html>
