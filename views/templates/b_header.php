<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../views/index.php?page=login");
    exit;
}else{
    $_SESSION['user'];
}  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../views/assets/css/styles.css" rel="stylesheet" />
    <link href="../views/assets/css/styles2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="shortut icon" href="../views/assets/img/eversion.ico">
<title>
<?php
  echo "$title";
?>
</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/views/b_index.php?page=administration"><img class="img-fluid" src="../views/assets/img/title_header.svg" alt=""></a>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/views/b_index.php?page=deconnexion">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Administration</div>
                            <a class="nav-link" href="/views/b_index.php?page=publi_article">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Publication articles
                            </a>
                            <a class="nav-link" href="/views/b_index.php?page=publi_publi">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Publication publication
                            </a>
                            <a class="nav-link" href="/views/b_index.php?page=publi_text">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Publication Texte publication
                            </a>
                            <a class="nav-link" href="/views/b_index.php?page=table_article">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tableau articles
                            </a>
                            <a class="nav-link" href="/views/b_index.php?page=table_newsletter">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tableau newsletter
                            </a>
                            <a class="nav-link" href="/views/b_index.php?page=table_publi">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tableau publication
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        <div id="layoutSidenav_content">
