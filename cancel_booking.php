<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$bookingId = intval($_POST['id']);

$sql = "DELETE FROM day_out_bookings WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $bookingId);

$response = [];
if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();


header('Content-Type: application/json');
echo json_encode($response);
?>
