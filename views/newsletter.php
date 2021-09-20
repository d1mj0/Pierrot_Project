<?php
    //Variable avec le titre de la page
    $title = "Newsletter";
    //Appel template header
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Inscription newsletter</h3></div>
                                        <div class="card-body">
                                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" required value="<?php echo $email; ?>"/>
                                                    <label for="inputEmail">Email <span class="err"><?php echo $emailErr; ?></span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Nom" name="lastname" pattern="^[a-zA-Z-' ]*$" required value="<?php echo $lastname; ?>"/>
                                                    <label for="inputLastName">Nom <span class="err"><?php echo $lastnameErr; ?></span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Prénom" pattern="^[a-zA-Z-' ]*$" name="firstname" required value="<?php echo $firstname; ?>"/>
                                                    <label for="inputFirstName">Prénom <span class="err"><?php echo $firstnameErr; ?></span></label>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                    <input type=submit class="btn" id="submit" value="Envoyer"/>
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
    //Validation du formulaire côté serveur

    $email = $lastname = $firstname = "";
    $emailErr = $lastnameErr = $firstnameErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($email)){
            $emailErr = "Veuillez renseigner ce champ.";
        }
        else{
            $email = clean_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Veuillez vérifier ce champ.";
            }
        }
        if(empty($lastname)){
            $lastnameErr = "Veuillez renseigner ce champ.";
        }
        else{
            $lastname = clean_input($_POST["lastname"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)){
                $firstnameErr = "Veuillez vérifier ce champ.";
            }
        }
        if(empty($firstname)){
            $firstnameErr = "Veuillez renseigner ce champ.";
        }
        else{
            $firstname = clean_input($_POST["firstname"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)){
                $firstnameErr = "Veuillez vérifier ce champ.";
            }
        }
    }

    function clean_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php
    //Appel template footer
    require_once("./templates/footer.php");
?>