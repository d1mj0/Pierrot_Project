<?php

    $title = "Accueil";

    require_once('./templates/header.php');
    require_once('../src/controllers/ArticleController.php');
    require_once("../src/controllers/PublicationController.php");

    

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles3();

    $publicController = new PublicationController(NULL, NULL, NULL, NULL);
    $recentPublications = $publicController->listPubliChronoDesc();
?>
<main>
    <br>
    <br>
    <section class="blog">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-9 m-auto ">
                <div id="carouselIndex" class="carousel slide carouselI" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <?php 
                        $i = 0; 
                        foreach($articles as $values){
                        $actives = '';
                        if($i == 0){
                        $actives ='active'; 
                        }  
                        ?>
                        <div>
                        <button type="button" data-bs-target="#carouselIndex" data-bs-slide-to="<?= $i; ?>" class="p-2 m-3 <?= $actives; ?>"></button>
                        </div>
                        <?php $i++; } ?>
                    </div>
                    <div class="carousel-inner">
                    <?php 
                        $i = 0; 
                        foreach($articles as $values){
                        $actives = '';
                        if($i == 0){
                        $actives ='active'; 
                        }  
                        ?>
                        <div class="carousel-item <?= $actives; ?>">
                            <img class="d-block img-fluid" src="<?= $values['img']; ?>" alt="<?= $values['title']; ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="mb-3"><?= $values['title'];?></h5>
                                <p><?= $values['description']; ?></p>
                                <br>
                                <a href="article.php?id=<?= $values['id_article']; ?>" class="button btn-lg btn-primary">Lire l'article</a>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndex" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndex" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section  id="pensee_globaleI">
        <div class="container-fluid">
            <div class="row">
                <div class="titleI col-lg-12 p-3">
                    <a href="pensee_globale.php"><h2>PENSÉE GLOBALE</h2></a>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text">La réflexion qui va suivre n’a comme unique et autre but que d’offrir un paradigme à
                            la <strong>pensée anarchiste</strong>. Elle part de la certitude qu’elle est la seule pensée en mesure de proposer
                            à <strong>l’Humanité</strong> un avenir moins inique que celui imposé par le libéralisme triomphant de ce XXième
                            siècle. Elle tient pour évidente que la seule manière d’y parvenir est de doter l’anarchisme d’un
                            entendement tel que Karl Marx l’a permis au communisme à travers son matérialisme historique.
                            Pour ce faire et contre toute attente, respectivement à la mercantilisation généralisée à laquelle
                            nous assistons, ce n’est pas sur <strong>l’économie</strong> qu’elle s’appuie mais sur <strong>l’anthropologie</strong>. Sur
                            l’anthropologie pour deux raisons. La première a trait aux travaux des anthropologues anarchistes
                            eux-mêmes qui démontent une par une les évidences de notre <strong>modernité</strong> tel que la naturalité de l’État,
                            de la loi du marché, du darwinisme social, etc. La seconde est qu’elle s’en remet à l’immanence de
                            l’anthropologie elle-même.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                          <img src="../views/assets/img/Eversion_370px.png" class="img-fluid" alt="Représentation graphique de l'éversion">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p class="text">Je ne pourrais dire si c’est sa frénétique fréquentation de sociétés hors temps, sinon
                            hors d’âge qui permet ainsi à la discipline d’accéder à une <strong>réalité</strong> d’un autre ordre. En revanche,
                            je tiens pour intuition que cette <strong>porosité</strong> nous préserve d’une réelle théocratisation de l’esprit,
                            qui n’est autre à mes yeux que celle du dogmatisme de la pensée duale. Il est vrai que pour moi,
                            Dieu et la dualité ne font qu’un. Éliminer l’un, c’est éliminer l’autre, le but étant de les retourner
                            l’un contre l’autre pour mieux les annihiler. Car autant s’éviter l’écueil du marxisme qui n’aboutit
                            finalement qu’au sacre d’un ersatz de religion en élevant le <strong>matérialisme</strong> au statut de culte.
                            D’ailleurs ce n’est pas tant pour le simple plaisir d’en finir avec des conceptions surannées
                            et par trop limitantes que j’entreprends cette démarche mais bien pour permettre à la <strong>pensée humaine</strong>
                            d’effectuer un saut quantique. Un saut nécessaire, imprescriptible même et ce afin de nous extirper
                            des affres dans lesquels nous nous abîmons et où finirons par nous perdre.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col-lg-10 mx-auto quotesLeft">
                        <figure class="py-1">
                            <blockquote  class="blockquote m-5 "><p class="text"><i class="fas fa-quote-left fa-lg  me-2"></i>La révolution de la <strong>pensée</strong> est la seule à laquelle nous devons nous préparer.<i class="fas fa-quote-right fa-lg  me-2"></i></p></blockquote>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="travaux_publications">
        <div class="container-fluid">
            <div class="row">
                <div class="titleI col-lg-12 p-3">
                    <a href="travaux_et_publications.php"><h2>TRAVAUX ET PUBLICATIONS</h2></a>
                </div>
            </div>
        </div>
        <br>
        <br>    
        
            <div class="container">
                <?php foreach($recentPublications as $values): ?>
                    <div class="row my-3">
                        <?php if($values['id_publi'] % 2 != 0): ?>
                        <div class="col-lg-4">
                            <a href="publication.php?id=<?= $values['id_publi']; ?>"><img class="img-fluid" src="<?= $values['img'] ?>" alt="<?=  $values['title'] ?>"></a>
                        </div>
                        <div class="col-lg-8">
                                <a href="publication.php?id=<?= $values['id_publi']; ?>"><h3 class="tnPublicationL"><?= $values['title']; ?></h3></a>
                            <div class="textTnPubli"><?= (strlen($values['text']) > 250) ? substr($values['text'], 0, 580)."..." : ($values['text'])?></p>
                            <div>
                                <a class="tnPublicationL" href="publication.php?id=<?= $values['id_publi']; ?>">Lire la suite >>></a>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="row my-3">
                        <div class="col-lg-8">
                            <a href="publication.php?id=<?= $values['id_publi']; ?>"><h3 class="tnPublicationR"><?= $values['title']; ?></h3></a>
                        <div class="textTnPubliR"><?= substr($values['text'], 0, 585) . "..."; ?></div>
                        <div>
                            <a class="tnPublicationR" href="publication.php?id=<?= $values['id_publi']; ?>">Lire la suite >>></a>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="publication.php?id=<?= $values['id_publi']; ?>"><img class="img-fluid" src="<?= $values['img'] ?>" alt="<?=$values['title'] ?>"></a>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>         
    </section>
    <br>
    <br>
</main>
<?php
    require_once("./templates/footer.php");
?>
