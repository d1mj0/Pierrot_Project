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
        <div class="container-fluid">
            <?php foreach($recentPublications as $value): ?>
                <?php if($value['id_publi'] % 2 != 0): ?>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="publication.php?id=<?= $value['id_publi']; ?>"><img src="<?= $value['img']; ?>" alt="<?= $value['title']; ?>"></a>
                        </div>
                        <div class="col-lg-8">
                            <a href="publication.php?id=<?= $value['id_publi']; ?>"><h3><?= $value['title']; ?></h3></a>
                            <?= substr($value['text'], 0, 1000) . "...</p>"; ?>
                            <a href="publication.php?id=<?= $value['id_publi']; ?>">Lire la suite >>></a>
                        </div>
                    </div>
                    <br>
                <?php else: ?>
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="publication.php?id=<?= $value['id_publi']; ?>"><h3><?= $value['title']; ?></h3></a>
                            <?= substr($value['text'], 0, 1000) . "...</p>"; ?>
                            <a href="publication.php?id=<?= $value['id_publi']; ?>">Lire la suite >>></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="publication.php?id=<?= $value['id_publi']; ?>"><img src="<?= $value['img']; ?>" alt="<?= $value['title']; ?>"></a>
                        </div>
                    </div>
                    <br>
                <?php endif; ?>
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
