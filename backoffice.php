<?php
include("config.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant 2.0 - Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="backoffice_style.css">
</head>
<body>
    <nav class="navbar nav-underline bg-primary-subtle flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="index.html">HOME</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="menu.html">MENU</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="pictures.html">PICTURES</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="about.html">ABOUT</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="contact.html">CONTACT</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>This is Your Back Office</h1>
            </div>
            <div class="col-12 text-center">
                <h2>Handle interactions with your website</h2>
            </div>
            <div class="col-12 mt-3 text-center">
                <button type="button" class="btn btn-success" onclick="location.href='./backoffice.php'">Manage Contact Form</button>
                <button type="button" class="btn btn-success" onclick="location.href='./image_upload.php'">Upload Images</button>
                <button type="button" class="btn btn-success" onclick="location.href='./displayUserDetails.php'">Manage Photos</button>
            </div>
        </div>
    </div>
    <div class="container my-5 d-flex justify-content-center">
        <div>
            <table class="table table-striped text-center border">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Agreed to Terms</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                    // Include the database configuration file
                    include 'config.php';

                    // Prepare the SQL query to retrieve messages from the database
                    $sql = "SELECT id, first_name, last_name, email, subject, comment, checkbox FROM messages";
                    $result = $conn->query($sql);

                    // Check if there are any records returned
                    if ($result->num_rows > 0) {
                        // Output data for each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"]. "</td>
                                    <td>" . $row["first_name"]. "</td>
                                    <td>" . $row["last_name"]. "</td>
                                    <td>" . $row["email"]. "</td>
                                    <td>" . $row["subject"]. "</td>
                                    <td>" . $row["comment"]. "</td>
                                    <td>" . ($row["checkbox"] ? 'Yes' : 'No'). "</td>
                                    <td>
                                        <form method='post' action='process_contact_form.php' style='display:inline;'>
                                            <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                                            <input type='submit' value='Delete' class='btn btn-danger'>
                                        </form>
                                    </td>
                                </tr>";
                        }
                    } else {
                        // Display a message if no records are found
                        echo "<tr><td colspan='8'>No messages found</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>