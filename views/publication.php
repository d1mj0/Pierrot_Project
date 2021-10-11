<?php
    require_once("./templates/header.php");
    require_once("../src/models/PublicationModel.php");

    $publicModel = new PublicationModel();
    $publication = $publicModel->getOne($_GET['id']);
    $title = $publication[0]['title'];
?>

<main>
    <section>
      <br>
      <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="titleA"><?=$publication[0]['title']; ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  mx-auto">
                    <img src="<?=$publication[0]['img']; ?>" class="img-fluid " alt="">
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h3><?=$publication[0]['description']; ?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto text" >
                    <?=$publication[0]['text']; ?>
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