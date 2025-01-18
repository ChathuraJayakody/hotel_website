
<?php

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['nic']) && isset($_POST['date']) && isset($_POST['guests']) && isset($_POST['payment_option']) && isset($_POST['guide'])) {
    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];
    $payment_option = $_POST['payment_option'];
    $guide = $_POST['guide'];

    
    $sql = "INSERT INTO day_out_bookings (full_name, email, nic, date, guests, payment_option, guide) 
            VALUES ('$full_name', '$email', '$nic', '$date', '$guests', '$payment_option', '$guide')";

    if (mysqli_query($con, $sql)) {
      
        header('Location: '.$_SERVER['PHP_SELF'].'?status=success');
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
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
            padding: 20px;
            overflow: hidden;
            border-radius: 15px;
        }

        .input-group-register {
            top: 70px;
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
            margin: 30px auto 0 auto;
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

      
        .modal {
            display: none;
            position: fixed;
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #333;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            color: white;
            border-radius: 10px;
        }

        
        .guide-option {
            display: inline-block;
            width: 32%;
            background-color: #444;
            padding: 7px;
            margin: 5px;
            cursor: pointer;
            text-align: center;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .guide-option:hover {
            background-color: #8d8d8d;
        }

        .guide-option.selected {
            background-color: #666;
        }

        .modal-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .modal-footer {
            text-align: center;
            margin-top: 20px;
        }

        .modal-footer button {
            padding: 10px 20px;
            background-color: #F3C693;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #333;
        }

        .modal-footer button:hover {
            background-color: #e0b96e;
        }

        
        .hide-select {
            display: none;
        }
    </style>
</head>
<body>

    <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="assets/videos/day.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <a href="services.php" class="back-button">Back</a>
    
    <div id="guideModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Select a Guide</h2>
            </div>
            <div id="guideOptions" class="modal-body">
             
            </div>
            <div class="modal-footer">
                <button id="confirmSelection">Confirm Selection</button>
            </div>
        </div>
    </div>

    <div class="full-page">
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class="cursive-heading">Book Your Day Out</div>
                <form id='dayout-form' class='input-group-register' method="post" action="">
                    <input type='text' class='input-field' name='full_name' placeholder='Full Name' required>
                    <input type='email' class='input-field' name='email' placeholder='Email' required>
                    <input type='text' class='input-field' name='nic' placeholder='NIC No.' required>
                    
                    <input type="text" id="date" class="input-field" name="date" placeholder="Event Date" required onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                     
                    <input type='number' class='input-field' name='guests' placeholder='Number of Guests' required>
                    
                    <select name="payment_option" class='input-field' required>
                        <option value="">Select Payment Option</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="direct_pay">Direct Pay</option>
                    </select>
                    
                    <select id="guideSelect" name="guide" class='input-field'>
                        <option value="">Select a Guide</option>
                     
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

   
    var modal = document.getElementById("guideModal");
    var guideOptions = document.getElementById("guideOptions");
    var confirmButton = document.getElementById("confirmSelection");
    var guideSelect = document.getElementById("guideSelect");
    var selectedGuide = null;
    var selectedGuideName = "";

    
    fetch('get_guides.php')
        .then(response => response.json())
        .then(guides => {
          
            guides.forEach(function(guide) {
                var guideDiv = document.createElement("div");
                guideDiv.className = "guide-option";
                guideDiv.innerHTML = `
                    <strong>${guide.name}</strong><br>
                    Experience: ${guide.experience} years<br>
                    Languages: ${guide.languages}<br>
                    Rating: ${guide.rating}/5 <br>
                    Mobile Number: ${guide.phone_number}
                `;
                guideDiv.setAttribute("data-id", guide.id);
                guideDiv.setAttribute("data-name", guide.name);

                guideDiv.addEventListener("click", function() {
                   
                    var previouslySelected = document.querySelector(".guide-option.selected");
                    if (previouslySelected) {
                        previouslySelected.classList.remove("selected");
                    }
                   
                    guideDiv.classList.add("selected");
                    selectedGuide = guide.id;
                    selectedGuideName = guide.name;
                });

                guideOptions.appendChild(guideDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching guide data:', error);
        });


    guideSelect.addEventListener("click", function(e) {
        e.preventDefault();
        guideSelect.classList.add('hide-select'); 
        modal.style.display = "block";
    });

   
    confirmButton.addEventListener("click", function() {
        if (selectedGuide !== null) {
           
            guideSelect.value = selectedGuide;

           
            let optionFound = false;
            for (let i = 0; i < guideSelect.options.length; i++) {
                if (guideSelect.options[i].value == selectedGuide) {
                    guideSelect.options[i].text = selectedGuideName;
                    guideSelect.selectedIndex = i;
                    optionFound = true;
                    break;
                }
            }
            if (!optionFound) {
                
                let newOption = document.createElement('option');
                newOption.value = selectedGuide;
                newOption.text = selectedGuideName;
                guideSelect.add(newOption);
                guideSelect.value = selectedGuide;
            }

            modal.style.display = "none";
            guideSelect.classList.remove('hide-select');
        } else {
            alert("Please select a guide.");
        }
    });

   
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            guideSelect.classList.remove('hide-select');
        }
    });
});

</script>

</body>
</html>