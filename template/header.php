<?php 
  include ('link.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IT Club | Pinter Ngaji Melek IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="<?php echo $url['base_url'];?>assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo $url['base_url'];?>assets/img/logo.png" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="<?php echo $url['base_url'];?>index.php"><i class="bi bi-house"></i> Home</a>
            <a class="nav-link" href="<?php echo $url['base_url'];?>view/about.php"><i class="bi bi-file-person"></i> About</a>
            <a class="nav-link" href="<?php echo $url['base_url'];?>view/tutorial.php"><i class="bi bi-book"></i>Tutorial</a>
            <a class="nav-link" href="<?php echo $url['base_url'];?>view/tim.php"><i class="bi bi-people-fill"></i> Team</a>
            <a class="nav-link" href="<?php echo $url['base_url'];?>view/galeri.php"><i class="bi bi-images"></i> Galeri</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->