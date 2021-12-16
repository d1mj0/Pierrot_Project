<?php
    $title = "Login";
    require_once('../src/controllers/UserController.php'); 

    $message="";

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $userController = new UserController($_POST['email'], $_POST['password'], NULL);
        $userController->login();
    } else {
        $message = "Nom d'utilisateur ou mot de passe invalide!";
       }
    
    require_once('./templates/header.php');
?>
<main>
    <div id="layoutContact">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center card-title my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="login.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email"  type="email" placeholder="name@example.com" />
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe" />
                                                <label for="password">Mot de passe</label>
                                            </div>
                                            <div class="h-captcha" data-sitekey="00444aed-7125-4159-bf73-48bcd3055823"></div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button type="submit">Se connecter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <br>
    <br>
</main>
<?php
    //Appel template footer
    require_once("./templates/footer.php");
?>


