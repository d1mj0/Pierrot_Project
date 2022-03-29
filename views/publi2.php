<?php
    require_once("../src/controllers/TextController.php");
    require_once("../src/models/PublicationModel.php");
    
    $publicModel = new PublicationModel();
    $publication = $publicModel->getOne(10);

    $title = $publication[0]['title'];
    require_once("./templates/header.php");

    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $d= $publication[0]['date_time_publi']; 
    $tmstp = strtotime($d);
    $dfr = strftime('%A %d %B %Y', $tmstp);

    $textCVRT = new TextController();
    $textC = $textCVRT->txt2html(($publication[0]['text']));
?>
<main>
    <section>
      <br>
      <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="titleA"><?= $publication[0]['title']; ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img src="<?= $publication[0]['img']; ?>" class="img-fluid " alt="">
                    <p>Publié le <?= $dfr; ?> </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto">
                    <h3><?= $publication[0]['description']; ?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <p class=""><?= $textC; ?></p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
</main>
<?php
    require_once("./templates/footer.html");
?>