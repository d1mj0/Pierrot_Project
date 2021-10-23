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
    <script defer src="../views/assets/js/script.js"></script>
    <link rel="shortut icon" href="../views/assets/img/eversion.ico">
    <title>
<?php
    echo "$title";
?>
    </title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 d-none d-md-block d-lg-block">
                    <a href="index.php"><img src="../views/assets/img/design_header.jpg" class="img-fluid" /></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container-fluid">
                    <a class="navbar-brand m-0 p-0" href="#"><img src="../views/assets/img/design_header.jpg"  class="img-fluid mx-auto pt-0 d-block d-md-none d-lg-none navbar-img" /></a>
                <button class="navbar-toggler hamburger hamburger--slider-r is-active d-block d-md-none d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerContent" aria-controls="navbarTogglerContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerContent">
                    <ul class="navbar-nav container-fluid  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link-menu col-lg-4 " href="index.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-menu col-lg-4" href="pensee_globale.php">PENSÉE GLOBALE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-menu col-lg-4" href="travaux_et_publications.php">TRAVAUX ET PUBLICATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-menu col-lg-4" href="blog.php">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-menu col-lg-4" href="a_propos.php">&#xC0; PROPOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>