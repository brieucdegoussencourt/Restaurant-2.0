<?php

// Include the database configuration file
include 'config.php';

$sql = "SELECT photo_url FROM user";
$result = $conn->query($sql);

$photos = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $photos[] = $row['photo_url'];
    }
}
$conn->close();

echo json_encode($photos);
?>