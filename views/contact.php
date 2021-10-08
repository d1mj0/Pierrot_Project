    <?php
    //Variable avec le titre de la page
    $title = "Contact";
    //Appel template header
    require_once('./templates/header.php');
    require_once('./captcha_code_file.php')
    ?>

    <main>
        <div id="layoutContact">
            <div id="layoutContact_content">
                    <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Contact</h3></div>
                                            <div class="card-body">
                                                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" value="<?php echo htmlentities($visitor_email) ?>" />
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputName" type="name" placeholder="Nom" value="<?php echo htmlentities($name) ?>"/>
                                                        <label for="inputName">Nom</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputLastName" type="lastname" placeholder="Prénom" value="<?php echo htmlentities($lastName) ?>"/>
                                                        <label for="inputLastName">Prénom</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <textarea id="textArea" class="form-control" type="textarea" name="textArea" placeholder="Message"  rows="5" cols="33" value="<?php echo htmlentities($user_message) ?>">                              
                                                        </textarea>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" > 
                                                        <label for="message">Entrez le code suivant :</label>
                                                        <input id="6_letters_code" name="6_letters_code" type="text">
                                                    </div> 
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                        <a class="btn" type="submit" value="Submit" name="submit" href="mailto:maxeuhma@gmail.com">Envoyer</a>
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