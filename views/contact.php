    <?php
    //Variable avec le titre de la page
    $title = "Contact";
    //Appel template header
    require_once('./templates/header.php');
    ?>

    <main>
        <section>
        <div id="layoutContact">
                <div id="layoutContact_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Contact</h3></div>
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
                                                <div class="form-floating mb-3">
                                                    <textarea id="textArea" class="form-control" type="textarea" name="textArea" placeholder="Message"  rows="5" cols="33">                              
                                                    </textarea>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                        <a class="btn " href="">Envoyer</a>
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
    </main>

    <?php
    //Appel template footer
    require_once("./templates/footer.php");
    ?>