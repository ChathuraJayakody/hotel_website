<?php

$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql = "SELECT * FROM guides";
$result = mysqli_query($con, $sql);

$guides = array();
while ($row = mysqli_fetch_assoc($result)) {
    $guides[] = $row;
}

header('Content-Type: application/json');
echo json_encode($guides);


mysqli_close($con);
?>
