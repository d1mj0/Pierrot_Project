<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Pierre André Jarillot_De l Eversion</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="link_menu"><a href="index.php">Accueil</a></li>
                <?php if(empty($_SESSION['user'])): ?>
                    <li class="link_menu"><a href="login.php">Connexion</a></li>
                    <?php else: ?>
                    <li class="link_menu"><a href="profil.php">Profil</a></li>
                    <li class="link_menu"><a href="deconnexion.php">Déconnexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php if(!empty($_SESSION) && $_SESSION['user']['rank'] === "admin"): ?>
        <nav>
            <ul>
                <li class="link_menu"><a href="_administration.php">Agences</a></li>
                <li class="link_menu"><a href="command_administration.php">Commandes</a></li>
                <li class="link_menu"><a href="user_administration.php">Membres</a></li>
                <li class="link_menu"><a href="car_administration.php">Vehicules</a></li>
            </ul>
        </nav>
        <?php endif; ?>
    </header>
    