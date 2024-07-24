<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>restaurant-2.0_Image_Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="backoffice_style.css">
</head>
<body>
    <nav class="navbar nav-underline bg-primary-subtle flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="index.html">HOME</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="menu.html">MENU</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="pictures.html">PICTURES</a>
        <a class="flex-sm-fill text-sm-center nav-link p-2" href="about.html">ABOUT</a>
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="contact.html">
            <img src="images/pizza.svg" width="40" alt="pizza icon">
        </a>
    </nav>
    <div class="container mt-5 max-width=md">
        <div class="row">
            <div class="col-12 text-center">
                <h1>This is Your back office</h1>
            </div>
            <div class="col-12 text-center">
                <h2>Handle interactions with your website</h2>
            </div>
            <div class="col-12 mt-3 text-center">
                <button type="button" onclick="location.href='./backoffice.php'">contact_form</button>
                <button type="button" onclick="location.href='./image_upload.php'">image_upload</button>
                <button type="button" onclick="location.href='./mail.php'">email</button>
            </div>
            <div class="col-12 text-center">
            <div class="container my-5">
      <h1 class="text-center">New Image</h1>
    </div>

    <div class="container my-5 w-75">
      <!-- Form for handling user input -->
      <!-- Enctype attribute is set to multipart/form-data for handling file uploads -->
      <form action="handleInput.php" method="post" enctype="multipart/form-data">
        <!-- Input field for user's name -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <!-- Input field for user's description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="description" class="form-control" id="description" name="description">
        </div>

        <!-- Input field for user's photo -->
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <!-- Input type set to "file" for handling file uploads -->
          <!-- Accept attribute set to "image/*" to restrict file types to images -->
          <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
        </div>

        <!-- Submit button for the form -->
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
            </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>