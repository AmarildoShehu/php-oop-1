<?php include_once 'Models/movie.php'; ?>
<?php include_once 'Models/director.php'; ?>
<?php include_once 'Models/actor.php'; ?>
<?php include_once 'DB/db.php'; ?>


<div class="container mt-5">
    <h1 class="mb-4">Movie List</h1>

    <?php
    foreach ($movies as $movie) {
        $movie->displayInfo();
    }
    ?>

</div>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Movie</title>

    <!-- link Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Font Awesome CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />

    <!-- link style -->
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
  <?php include_once 'Partials/header.php'; ?>
    <div class="container mt-5">
      <h1 class="mb-4">Movie List</h1>
      <?php include_once 'Partials/footer.php'; ?>
    </div>
  </body>
</html>
