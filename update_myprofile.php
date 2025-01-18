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
$phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
$feedback = mysqli_real_escape_string($con, $_POST['feedback']);

// Update phone number and feedback in the database
$query = "UPDATE users SET phone_number='$phoneNumber', feedback='$feedback' WHERE email='$email'";

if (mysqli_query($con, $query)) {
    $_SESSION['message'] = 'Profile updated successfully.';
} else {
    $_SESSION['message'] = 'Failed to update profile: ' . mysqli_error($con);
}

mysqli_close($con);

// Redirect back to profile page
header('Location: myprofile.php');
exit();
?>
