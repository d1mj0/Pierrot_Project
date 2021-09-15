<?php

    require_once('../src/controllers/UserController.php'); 

    if(!empty($_GET['mail']) && !empty($_GET['pass'])){
        $userController = new UserController(NULL, $_GET['pass'], NULL, NULL, $_GET['mail'], NULL, NULL);
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
                                            <form>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                        <a class="btn btn-primary" href="blog_administration.php">Login</a>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
    </main>
</body>
</html>