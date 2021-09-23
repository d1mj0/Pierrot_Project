<?php
    //Variable avec le titre de la page
    $title = "Accueil";
    require_once('./templates/header.php');
    require_once('../src/controllers/ArticleController.php');

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();

?>

<main>
    <br>
    <br>
    <section class="container-fluid" id="articles">
            <div class="row">
                <div class="title col-12">
                    <a href="blog.php"><h2>Derniers articles</h2></a>
                </div>
            </div>
        <br>
        <div class="container">
            <div class="row">
                <?php foreach($articles as $values): ?>
                <article class="col-lg-8">
                    <a href=""><?= $values['img'];?><?= $values['title'];?><?= $values['description'];?></a>
                </article>
                <?php endforeach; ?>
                
            </div>
        </div>
    </section>
    <br>
    <br>   
    <section class="container-fluid" id="pensee_globale">
            <div class="row">
                <div class="title col-12">
                    <a href="pensee_globale.php"><h2>Pensée globale</h2></a>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
                            ipsum exercitationem eligendi illum quis in quod quia.</p>
                    </div>
                    <div class="img-container col-lg-4 mx-auto" >
                        <img src="./assets/img/Eversion_370px.svg" id="img_pensee_globale" alt="Representation graphique de l'eversion">
                    </div>
                    <div class="col-lg-4 mx-auto">
                    <p class="text">>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo inventore cupiditate harum ex, hic suscipit explicabo 
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
    <section id="travaux_publications" class="container-fluid">
        <div class="row">
            <div class="title col-12">
                <a href="travaux_et_publications.php"><h2>Travaux et publications</h2></a>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-8">
                    <a href="La_version_de_eve.php"><h3>Travaux et publications</h3></a>
                    <p class="text">Comme il y est question d’anthropologie anarchiste, il paraissait judicieux d’en offrir un état des lieux, une esquisse, 
                            pour le moins une axiomatique, sinon quelques prémisses. Cependant, au fur et mesure que s’établissent les primats anarchistes, 
                            on s’aperçoit de l’importance croissance que prend le mythe, et ce jusqu’à l’extrême assertion que représente 
                            la nécessité de son élaboration. Or si l’on admet que la Genèse est le mythe masculin de la hiérarchie, 
                            alors le mythe anarchiste se doit être féminin et en ce sens, il ne peut-être que celui du « Matriarcat »</p>
                            <a href="la_version_de_eve.php">Lire la suite >>></a>
                </div>
                <div class="col-lg-8">
                    <a href="La_version_de_eve.php"><h3>La version de Eve ou l'élaboration d'un mythe anarchiste</h3></a>
                    <p class="text">Comme il y est question d’anthropologie anarchiste, il paraissait judicieux d’en offrir un état des lieux, une esquisse, 
                            pour le moins une axiomatique, sinon quelques prémisses. Cependant, au fur et mesure que s’établissent les primats anarchistes, 
                            on s’aperçoit de l’importance croissance que prend le mythe, et ce jusqu’à l’extrême assertion que représente 
                            la nécessité de son élaboration. Or si l’on admet que la Genèse est le mythe masculin de la hiérarchie, 
                            alors le mythe anarchiste se doit être féminin et en ce sens, il ne peut-être que celui du « Matriarcat »</p>
                            <a href="la_version_de_eve.php">Lire la suite >>></a>
                </div>
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                
                <div class="col-lg-4">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-8">
                    <a href="la_version_de_eve.php"><h3>La version de Eve ou l'élaboration scientifique d'un mythe anarchiste</h3></a>
                    <p class="text">Si d’un côté, les sciences sociales peinent dans un grand dédale de complexités qu’elles n’ont ramené à aucune loi 
                            d’organisation claire, à aucun principe véritablement unificateur1 et que de l’autre on ne peut que constater l’évidente 
                            faiblesse théorique de l’anarchisme, parent pauvre du marxisme, théoriquement un peu boiteux, mais compensant peut-être 
                            l’intelligence par la passion et la sincérité… 
                            Alors gageons que la combinaison de ces carences fasse la force d’une science véritablement anarchiste.</p>
                    <a href="">Lire la suite >>></a>
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
