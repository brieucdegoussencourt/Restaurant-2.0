<?php

// Include the file that establishes the database connection
include("./config.php");

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

  // Redirect back to the upload image page
  header("Location: ./upload_image.php");
  exit;
}

// Check if this is a delete request
if (isset($_POST['delete_id'])) {
  $id = $_POST['delete_id'];

  // Prepare the SQL query to delete the message
  $sql = "DELETE FROM user WHERE id=$id";

  // Execute the query and check if the deletion was successful
  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . $conn->error;
  }

  // Close the database connection
  $conn->close();

  // Redirect back to the displayUserDetails page
  header("Location: ./displayUserDetails.php");
  exit;
}

// Check if the form is submitted
if (isset($_POST["submit"])) {

  // Retrieve user input from the form
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $description = mysqli_real_escape_string($conn, $_POST["description"]);

  // File upload handling
  $photo = $_FILES['photo']['name'];          // Get the original name of the uploaded file
  $temp_name = $_FILES['photo']['tmp_name'];  // Get the temporary name assigned to the file by the server
  $folder = "./uploads/";                       // Set the folder where uploaded files will be stored
  $photo_url = "./uploads/" . $photo;          // Correct concatenation and added semicolon

  // Move the uploaded file from the temporary location to the specified folder
  move_uploaded_file($temp_name, $folder . $photo);

  // Insert user data into the database
  $sql = "INSERT INTO `user` (`name`, `description`, `photo`, `photo_url`) VALUES ('$name', '$description', '$photo', '$photo_url')";
  $result = mysqli_query($conn, $sql);

  // Check if the database insertion was successful
  if ($result) {
    // Redirect to a page displaying user details upon success
    header("location: displayUserDetails.php");
  } else {
    // Print an error message if the database insertion fails
    echo "Error: " . mysqli_error($conn);
  }
}

?>