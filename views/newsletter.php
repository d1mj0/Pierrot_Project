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
                                                <form>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputName" type="name" placeholder="Nom" />
                                                        <label for="inputName">Nom</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputLastName" type="lastname" placeholder="Prénom" />
                                                        <label for="inputLastName">Prénom</label>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                            <a class="btn" href="">Envoyer</a>
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