    <?php
    //Variable avec le titre de la page
    $title = "Sites amis";
    //Appel template header
    require_once("./templates/header.php");
    ?>

<main>
    <br>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="title col-lg-12">
                    <h2>Sites Amis</h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <a href="http://www.atelierdecreationlibertaire.com/"><img src="../views/assets/img/logoACL.png" alt=""></a> 
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