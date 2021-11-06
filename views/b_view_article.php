<?php
    $title =  "Afficher l'article";
    require_once('../views/templates/b_header.php'); 
    require_once('../src/models/ArticleModel.php'); 

    $articleMdl = new ArticleModel();
    $articleRqst = $articleMdl->getOne($_GET['id']);

    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $d = $articleRqst[0]['date_time_publi']; 
    $tmstp = strtotime($d);
    $dfr = strftime('%A %d %B %Y', $tmstp);
?>

<main>
    <section>
      <br>
      <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="titleA"><?= $articleRqst[0]['title']; ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  mx-auto">
                    <img src="<?= $articleRqst[0]['img']; ?>" class="img-fluid " alt=""><br>
                    <p>Publié le <?= $dfr ; ?> </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h3><?= $articleRqst[0]['description']; ?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto text" >
                    <?= $articleRqst[0]['text']; ?>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
</main>

<?php
    require_once('../views/templates/b_footer.php');
?>