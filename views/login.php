<?php

    require_once('../src/controllers/UserController.php'); 

    if(!empty($_GET['mail']) && !empty($_GET['pass'])){
        $userController = new UserController($_GET['mail'], $_GET['pass'], NULL);
        $userController->login();
    }

    require_once('./templates/header.php');
?>
<body>
    <main>
        <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Connection</h3></div>
                                        <div class="card-body">
                                            <form action="login.php" method="get">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Mot de passe" />
                                                    <label for="inputPassword">Mot de passe</label>
                                                </div>
                                                <div class="d-flex align-items-center  mt-4 mb-0">
                                                        <a class="btn btn-primary" href="blog_administration.php">Login</a>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
    </main>
</body>

<?php
    //Appel template footer
    require_once("./templates/footer.php");
?>


</html>