<?php
require_once 'config.php';

$sql = "SELECT image_url FROM user"; // Adjust this query as needed
$result = $conn->query($sql);

$images = [];
while ($row = $result->fetch_assoc()) {
    $images[] = $row;
}

$imageGroups = array_chunk($images, 3); // Group images in sets of 3

header('Content-Type: application/json');
echo json_encode($imageGroups);

$conn->close();
?>