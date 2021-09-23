<?php
    
    require_once('../src/controllers/UserController.php'); 

   
        $userController = new UserController($_POST['email'], $_POST['password'], NULL);
        $userController->login();
    
    $title = "inscription";
    require_once('./templates/header.php');
?>

<main>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Connection</h3></div>
                                <div class="card-body">
                                    <form action="inscription.php" method="get">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email"  type="email" placeholder="name@example.com" />
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe" />
                                            <label for="password">Mot de passe</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <button type="submit">S'inscrire</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
        </div>
    </div>
</main>


<?php
    //Appel template footer
    require_once("./templates/footer.php");
?>


</html>