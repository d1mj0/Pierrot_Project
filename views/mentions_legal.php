<?php

  

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