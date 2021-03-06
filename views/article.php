<?php
    $title = $articleR[0]['title'];
    require_once("./templates/header.php");
    require_once('../src/models/ArticleModel.php');
    require_once('../src/controllers/TextController.php');

    $articles = new ArticleModel;
    $articleR = $articles->getOne($_GET['id']);

    
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $d= $articleR[0]['date_time_publi']; 
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
                    <h1 class="titleA"><?=$articleR[0]['title']; ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  mx-auto">
                    <img src="<?=$articleR[0]['img']; ?>" class="img-fluid " alt=""><br>
                    <p>Publié le <?=$dfr ; ?> </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto">
                    <h3><?=$articleR[0]['description']; ?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-10 mx-auto" >
                    <?= $articleR[0]['text']; ?>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
</main>

<?php
    require_once("./templates/footer.php");
?>
