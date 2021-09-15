<?php

    require_once('../src/controllers/UserController.php'); 

    if(!empty($_GET['mail']) && !empty($_GET['pass'])){
        $userController = new UserController(NULL, $_GET['pass'], NULL, NULL, $_GET['mail'], NULL, NULL);
        $userController->login();
    }

    require_once('./templates/header.php');
?>

    <section>
        <form action="login.php" method="get">
            <label for="mail">Email</label>
            <input type="email" id="mail" name="mail">

            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="pass" minlength="5">

            <button>Se connecter</button>
        </form>
    </section>
    </body>
</html>