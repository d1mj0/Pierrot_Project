<?php
    //Variable avec le titre de la page
    $title = "Accueil";
    require_once('./templates/header.php');
    require_once('../src/controllers/ArticleController.php');

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();

?>

<main>
    <section>
      <br>
      <br>
        <div class="container-fluid " id="articles">
          <div class="row">
              <div class="titleI col-12 p-2">
                  <a href="blog.php"><h2>Derniers articles</h2></a>
              </div>
          </div>
        </div>
        <br>
        <br>
        <div id="carouselIndex" class="carousel slide " data-ride="slide" data-interval='1000ms'>
            <ol class="carousel-indicators">

            <?= 
            $i = 0; 
            foreach($articles as $values){$actives = '';
            if($i == 0){
            $actives ='active'; 
            }  
            ?>

                <li type="button" data-target="#carouselIndex" data-slide-to="<?= $i; ?>" class="<?= $actives;?>" aria-current="true"></li>
            <?= $i++ ; }?>
            </ol>

            <div class="carousel-inner container-fluid">

                <?= 
                $i = 0; 
                foreach($articles as $values){$actives = '';
                if($i == 0){
                $actives ='active';
                } 
                ?>

                    <div class="carousel-item <?= $actives;?>">
                        <img class="d-block img-fluid" src="<?= $values['img'];?>" alt="<?= $values['title'];?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $values['title'];?></h5>
                            <p><?= $values['description'];?></p>
                            <br>
                            <a href="article.php?id=<?= $values['id_article']; ?>" class="button btn-lg btn-primary">Lire l'article</a>
                        </div>
                  </div>
                <?= $i++; }?>
            </div>
            <div>
                <button class="carousel-control-prev" type="button" data-target="#carouselIndex" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselIndex" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
      </div>
    </section>
    <br>
    <br>
    <section class="container-fluid" id="pensee_globale">
            <div class="row">
                <div class="titleI col-12 p-2">
                    <a href="pensee_globale.php"><h2>Pensée globale</h2></a>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
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
                          <img src="../views/assets/img/Eversion_370px.svg" class="" alt="Représentation graphique de l'éversion">
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
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
            <div class="container quotes">
                <div class="row">
                    <div class="col-lg-12">
                        <figure class="figurel m-3 p-3 rounded">
                            <blockquote  class="blockquote mb-4 text"><p><i class="fas fa-quote-left fa-lg  me-2"></i>La révolution de la <strong>pensée</strong> est la seule à laquelle nous devons nous préparer.<i class="fas fa-quote-right fa-lg  me-2"></i></p></blockquote>
                        </figure>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <br>
    <section id="travaux_publications" class="container-fluid">
        <div class="row">
            <div class="titleI col-12 p-2">
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
                        alors le mythe anarchiste se doit être féminin et en ce sens, il ne peut-être que celui du « Matriarcat »
                        </p>
                    <a href="la_version_de_eve.php">Lire la suite >>></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <a href="La_version_de_eve.php"><h3>La version de Eve ou l'élaboration d'un mythe anarchiste</h3></a>
                        <p class="text">Comme il y est question d’anthropologie anarchiste, il paraissait judicieux d’en offrir un état des lieux, une esquisse,
                        pour le moins une axiomatique, sinon quelques prémisses. Cependant, au fur et mesure que s’établissent les primats anarchistes,
                        on s’aperçoit de l’importance croissance que prend le mythe, et ce jusqu’à l’extrême assertion que représente
                        la nécessité de son élaboration. Or si l’on admet que la Genèse est le mythe masculin de la hiérarchie,
                        alors le mythe anarchiste se doit être féminin et en ce sens, il ne peut-être que celui du « Matriarcat »
                        </p>
                    <a href="la_version_de_eve.php">Lire la suite >>></a>
                </div>
            </div>
            <br>
            <div class="row">
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
                    <a href="la_version_de_eve.php">Lire la suite >>></a>
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
