<?php
    $title = "Newsletter";
    require_once('./templates/header.php');
    require_once("../src/controllers/NewsletterController.php");    

    if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email'])){
        $newsCtrl = new NewsletterController($_POST['name'], $_POST['lastname'], $_POST['email']);
        $newsCtrl->addEmail();
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
                                    <div class="card-header"><h3 class="text-center card-title my-4">Inscription newsletter</h3></div>
                                        <div class="card-body">
                                            <form method="POST" enctype="multipart/form-data" action="newsletter.php">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" required value=""/>
                                                    <label for="email">Email </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="lastname" type="text" placeholder="Nom" name="lastname" pattern="^[a-zA-Z-' ]*$" required value=""/>
                                                    <label for="lastname">Nom </span></label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Prénom" pattern="^[a-zA-Z-' ]*$" name="name" required value=""/>
                                                    <label for="name">Prénom </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input"  id="checkInput" type="checkbox"  required value=""/>
                                                    <label class="form-check-label"  for="checkInput">J'accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales.</label>
                                                </div>
                                                <div class="h-captcha" data-sitekey="00444aed-7125-4159-bf73-48bcd3055823"></div>
                                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                    <input type="submit" class="btn button submit btn-primary" id="submit" value="Envoyer"/>
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
    require_once("./templates/footer.php");
?>
