<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../views/assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../views/assets/css/style.css">

    <title>
<?php
    //Affiche le titre de la page
    print_r($title);
?>
    </title>
</head>

<body>
    <header>
        <div class="parent-img  d-none d-lg-block">
            <a href="index.php"><img src="../views/assets/img/design_header.jpg" class="parent-img-responsive" /></a>
        </div>
        <nav class="nav-container navbar-expand-md navbar-light">
            <div class="container">
                <div class="navbar-brand mx-auto d-block d-lg-none">
                    <a href="index.php"><img src="../views/assets/img/title_header.svg"  class="parent-img-responsive navbar-img" /></a>
                </div>
             </div>
            <button class="navbar-toggler align-center" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon "></span>
            </button>

                <ul class="navbar-nav collapse navbar-collapse" id="navbarText">
                    <li class="nav-item">
                        <a class="nav-link_menu col-lg-4 mx-auto" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link_menu col-lg-4 mx-auto" href="pensee_globale.php">Pensée globale<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link_menu col-lg-4 mx-auto" href="travaux_et_publications.php">Travaux et publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link_menu col-lg-4 mx-auto" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link_menu col-lg-4 mx-auto" href="a_propos.php">&#xC0; propos</a>
                    </li>
                </ul>
        </nav>

    </header>
