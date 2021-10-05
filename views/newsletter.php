<?php
    //Variable avec le titre de la page
    $title = "Newsletter";
    //Appel template header
    require_once('./templates/header.php');

    require_once("../src/controllers/NewsletterController.php");

    if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email'])){
        $newsletterController = new NewsletterController($_POST['name'], $_POST['lastname'], $_POST['email']);
        $newsletterController->addEmail();
    }

    var_dump($newsletterController);
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
                                            <form method="POST" enctype="multipart/form-data" action="newsletter.php">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" required value=""/>
                                                    <label for="email">Email <span class="err"><?php echo $emailErr; ?></span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="lastname" type="text" placeholder="Nom" name="lastname" pattern="^[a-zA-Z-' ]*$" required value="<?php echo $lastname; ?>"/>
                                                    <label for="lastname">Nom <span class="err"><?php echo $lastnameErr; ?></span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Prénom" pattern="^[a-zA-Z-' ]*$" name="name" required value="<?php echo $name; ?>"/>
                                                    <label for="name">Prénom <span class="err"><?php echo $nameErr; ?></span></label>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                    <input type="submit" class="btn" id="submit" value="Envoyer"/>
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
