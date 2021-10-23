<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //Variable avec le titre de la page
    $title = "Travaux et publications";
    //Appel template header
    require_once('./templates/header.php');
    require_once("../src/controllers/PublicationController.php");

    $publicController = new PublicationController(NULL, NULL, NULL, NULL);
    $recentPublications = $publicController->listPubliChronoDesc();
?>
<main>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="title col-12 p-2">
                <h2 >Travaux et Publications</h2>
            </div>
        </div>
    </div>
        <br>
    <section>
    <div class="container">
                <?php foreach($recentPublications as $values): ?>
                    <div class="row my-3">
                        <?php if($values['id_publi'] % 2 != 0): ?>
                        <div class="col-lg-4">
                            <a href="publication.php?id=<?= $values['id_publi']; ?>"><img class="img-fluid" src="<?= $values['img'] ?>" alt="<?=  $values['title'] ?>"></a>
                        </div>
                        <div class="col-lg-8">
                                <a href="publication.php?id=<?= $values['id_publi']; ?>"><h3 class="tnPublicationL"><?= $values['title']; ?></h3></a>
                            <div class="tnPublicationL"><?= (strlen($values['text']) > 250) ? substr($values['text'], 0, 580)."..." : ($values['text'])?></p>
                            <div>
                                <a class="textTnPubliL" href="publication.php?id=<?= $values['id_publi']; ?>">Lire la suite >>></a>
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
    //Appel template footer
    require_once("./templates/footer.php");
?>
