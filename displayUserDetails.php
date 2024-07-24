<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>



  <div class="container">

    <div class="container my-5 w-75">
      <h1 class="text-center">Manage Photos</h1>
      <button class="text-center" type="button" onclick="location.href='./image_upload.php'">Upload another image</button>
    </div>

    <div class="container my-5 w-75">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // Fetch user details from the database
          $sql = "SELECT * FROM `user`";
          $result = mysqli_query($conn, $sql);

          // Loop through each user record
          while ($row = mysqli_fetch_assoc($result)) {

            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $photo = $row["photo"]; //'photo'

            echo '<tr>
              <th scope="row">' . $id . '</th>
              <td>' . $name . '</td>
              <td>' . $description . '</td>
              <!-- Display user photo -->
              <td><img src="uploads/' . $photo . '" alt="User Photo" style="width: 75px; height: 75px;"></td>
              <!-- Display delete button -->
              <td>
                  <form method="post" action="handleinput.php" style="display:inline;">
                      <input type="hidden" name="delete_id" value="' . $row["id"] . '">
                      <input type="submit" value="Delete">
                  </form>
              </td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>