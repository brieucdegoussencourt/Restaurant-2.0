<?php
//sensitive info related to process_contact_form.php
$servername = "localhost";
$username = "root";
$password = "root"; // Default password for MAMP, change if necessary
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
