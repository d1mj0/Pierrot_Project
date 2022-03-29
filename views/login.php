<?php
    require_once('../src/controllers/UserController.php'); 
    if(isset($_POST['loginBtn']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $userController = new UserController($_POST['email'], $_POST['password'], NULL);
        $userController->login();
    } 
?>


