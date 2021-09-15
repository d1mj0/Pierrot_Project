<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/assets/css/reset.css">
    <link rel="stylesheet" href="../views/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../views/assets/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>
        <?php
            //Affiche le titre de la page
            print_r($title);
        ?>
    </title>
</head>
<body>
    <header>
    <div class="parent-img">
        <img src="../views/assets/img/design_header.svg" class="parent-img-responsive" />
        <img src="../views/assets/img/title_header.svg" class="child-img"/>
    </div>

        
        <nav>
            <div class="nav-container">
                <div class="row">
                    <div class="nav-link_menu col-sm10 col-md-10  col-lg-2 mx-auto"><a href="index.php">Accueil</a></div>
                    <div class="nav-link_menu col-sm10 col-md-10  col-lg-2 mx-auto"><a href="pensee_globale.php">Pensée globale</a></div>
                    <div class="nav-link_menu col-sm10 col-md-10  col-lg-2 mx-auto"><a href="a_propos.php">à propos</a></div> 
                    <div class="nav-link_menu col-sm10 col-md-10  col-lg-2 mx-auto"><a href="travaux_et_publications.php">Travaux et publications</a></div>
                </div>
            </div>
        </nav>
        
    </header>
    