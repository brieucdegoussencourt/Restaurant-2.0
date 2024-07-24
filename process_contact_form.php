<?php
include 'config.php';

$success = false;

// Check if this is a delete request
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    // Prepare the SQL query to delete the message
    $sql = "DELETE FROM messages WHERE id=$id";

    // Execute the query and check if the deletion was successful
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Redirect back to the backoffice page
    header("Location: backoffice.php");
    exit;
}

// Handle form submission for new messages
if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $checkbox = isset($_POST['checkbox']) ? 1 : 0;

    // Truncate comment to 500 characters if it exceeds the limit
    if (strlen($comment) > 500) {
        $comment = substr($comment, 0, 500);
    }

    // Prepare the SQL query to insert the form data into the database
    $sql = "INSERT INTO messages (first_name, last_name, email, subject, comment, checkbox)
    VALUES ('$first_name', '$last_name', '$email', '$subject', '$comment', '$checkbox')";

    // Execute the query and check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        $success = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    
</head>
<body>
    <?php if ($success): ?>
        <h2>Your message is being cooked</h2>
        <button onclick="window.location.href='./index.html'">Go Back to Main site</button>
        <pre><?php var_dump($first_name, $last_name, $email, $subject, $comment, $checkbox);?>
    </pre>
        
    <?php else: ?>
        <h2>Sorry there has been an error</h2>
        <h2>Your message was not sent successfully</h2>
        <button onclick="window.location.href='./index.html'">Go Back to Main site</button>
     
    
    <?php endif; ?>
</body>
</html>