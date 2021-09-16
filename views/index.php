<?php
    //Variable avec le titre de la page
    $title = "Accueil";
    require_once('./templates/header.php');
?>

<main>
    <br>
    <br>
    <section class="container" id="articles">
            <div class="row">
                <div class="title col-12">
                    <a href="blog.php"><h2>Derniers articles</h2></a>
                </div>
            </div>
        <br>
        <div class="container">
            <div class="row">
                <article class="col-lg-8">
                    <a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo ipsum exercitationem eligendi illum quis in quod quia.</a>
                </article>
                <article class="col-lg-8">
                    <a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo ipsum exercitationem eligendi illum quis in quod quia.</a>
                </article>
                <article class="col-lg-8">
                    <a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo ipsum exercitationem eligendi illum quis in quod quia.</a>
                </article>
            </div>
        </div>
    </section>
    <br>
    <br>   
    <section class="container" id="pensee_globale">
            <div class="row">
                <div class="title col-12">
                    <a href="pensee_globale.php"><h2>Pensée globale</h2></a>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                    </div>
                    <div class="img-container col-lg-4 mx-auto" >
                        <img src="./assets/img/Eversion_370px.svg" id="img_pensee_globale" alt="Representation graphique de l'eversion">
                    </div>
                    <div class="col-lg-4 mx-auto">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <br>
    <section id="travaux_publications" class="container">
        <div class="row">
            <div class="title col-12">
                <a href="travaux_et_publications.php"><h2>Travaux et publications</h2></a>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-8">
                    <a href=""><h2>Travaux et publications</h2></a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                </div>
                <div class="col-lg-8">
                    <a href=""><h2>Travaux et publications</h2></a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                </div>
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-8">
                    <a href=""><h2>Travaux et publications</h2></a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                </div>
            </div>
        </div>
    </section>
</main>
        

<?php
    //Appel template footer
    require_once("./templates/footer.php");
?>
