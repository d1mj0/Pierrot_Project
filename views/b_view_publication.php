<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $title = "Afficher la publication";
    require_once('../views/templates/b_header.php');
    require_once('../src/models/PublicationModel.php');


   

    $publiMdl = new PublicationModel();
    $publiRqst = $publiMdl->getOne($_GET['id']);

    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $d= $publiRqst[0]['date_time_publi']; 
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
                    <h1 class="titleA"><?= $publiRqst[0]['title']; ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  mx-auto">
                    <img src="<?= $publiRqst[0]['img']; ?>" class="img-fluid " alt=""><br>
                    <p>Publié le <?= $dfr ; ?> </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h3><?= $publiRqst[0]['description']; ?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto text" >
                    <?= $publiRqst[0]['text']; ?>
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