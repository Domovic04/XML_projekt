<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navigacija">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="vozaci.php">Vozači</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Vozači</a>
        </li>
    </div>
  </div>
</nav>
<?php


$xml = simplexml_load_file('osobnoVozaci.xml');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color:aliceblue;">

    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
            <?php
                foreach ($xml->vozac as $vozac) {
                    $ime = $vozac->ime;
                    $slika = "img/" . $vozac->slika;
                    $opis = $vozac->opis;

                    echo '<div class="vozac">';
                    echo '<h2>' . $ime . '</h2>';
                    echo '<img src="' . $slika . '" alt="' . $ime . '">';
                    echo '<p>' . $opis . '</p>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <footer>
        <div class="container">
            <h5 class="text-center">&copy; Luka Domović 2025.</h5>
        </div>
    </footer>
</body>
</html>