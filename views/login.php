<?php
    require_once('../src/controllers/UserController.php'); 
    if(isset($_POST['loginBtn']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $userController = new UserController($_POST['email'], $_POST['password'], NULL);
        $userController->login();
    } 
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
                                        <form action="/views/index.php?page=login" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email"  type="email" placeholder="name@example.com" />
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe" />
                                                <label for="password">Mot de passe</label>
                                            </div>
                                            <div class="h-captcha" data-sitekey="158bfbf9-f7ba-4e81-87ee-108240a9d7c3"></div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button type="submit" name="loginBtn" onclick="callValidation()">Se connecter</button>
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


