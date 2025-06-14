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
    <a  class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vozaci.php">Vozači</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Početna</a>
        </li>
    </div>
  </div>
</nav>
<?php


$xml = simplexml_load_file('vozaci.xml');

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

        <table class="table mt-5 table-striped">
            <thead>
                <tr class="table-danger">
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Godište</th>
                    <th>F1 tim</th>
                    <th>Bolid</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($xml->vozac as $vozac): ?>
                    <tr>
                        <td><?php echo $vozac->ime; ?></td>
                        <td><?php echo $vozac->prezime; ?></td>
                        <td><?php echo $vozac->godiste; ?></td>
                        <td><?php echo $vozac->tim; ?></td>
                        <td><?php echo $vozac->bolid; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <br>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
            <?php
                $slika = "img/" . $xml->slike->slika;
                echo '<div class="slika-bolid">';
                echo '<img src="' . $slika . '" alt="Red Bull bolid">';
                echo '</div>';
            ?>
            <p class="opis">Redbull RB21</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer>
        <div class="container">
            <h5 class="text-center">&copy; Luka Domović 2025.</h5>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>