<?php
    //Variable avec le titre de la page
    $title = "Contact";
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
                                    <div class="card-header "><h3 class=" text-center card-title my-4">Contact</h3></div>
                                        <div class="card-body">
                                            <p>
                                            Pour tout type d'informations ou de demandes, veuillez utiliser l'adresse suivant :
                                            </p>
                                            <p>
                                            Email: <a href="contact@deleversion.org"></a> 
                                            </p>
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