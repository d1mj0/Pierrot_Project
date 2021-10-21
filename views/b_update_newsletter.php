<?php

$title =  "Mise à jour d'inscription";

require_once('../views/templates/b_header.php'); 
require_once('../src/models/NewsletterModel.php'); 
require_once('../src/controllers/NewsletterController.php');







$newsletter = new NewsletterModel;
$newsletterR = $newsletter->getOne($_GET['id']);


if(isset($_POST['id']) && isset($_POST['newsUpdate'])){
if(!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['email'])){
$newsUpdate = new NewsletterController($_POST['name'], $_POST['lastName'], $_POST['email']);
$newsUpdate->updateNewsletter();

if(!$newsUpdate){
echo '<div class="alert alert-success>
<button type="button" class="close" data-dismiss="alert-success">
<strong>"L article a été mis à jour"</strong>
</div>';

}

else{
echo '<div class="alert alert-danger>
<button type="button" class="close" data-dismiss="alert-danger">
<strong>"L article n a pas été mis a jour"</strong>
</div>';

}

}
}


?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mise à jour de l'article <?= $newsletterR[0]['title']; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
            <li class="breadcrumb-item active">Mise à jour d'inscription Newsletter</li>
        </ol>
        <div id="layoutArticle">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de <br><?= $newsletterR[0]['name']; ?><?= " ".$newsletterR[0]['name']; ?></h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_update_article.php?<?= $newsletterR[0]['id']; ?>"  method="POST">
                                        <input type="hidden" name="id" value="<?= $newsletterR[0]['id']; ?>" />
                                            <label class="form-label" for="title">Titre</label>
                                            <div class="form-floating mb-3">
                                                <input  id="editTitle" class="form-control" name="title"  type="text" value="<?= $newsletterR[0]['name']; ?>" required/>
                                            </div>
                                            <br>            
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-floating mb-3">
                                                <textarea  id="editDescription" class="form-control" name="description"  type="text" required ><?= $newsletterR[0]['lastname']; ?></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Texte</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="editText" class="form-control" name="text" type="text" cols="40" rows="10" required><?= $newsletterR[0]['email']; ?></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <a href="b_table_newsletter.php"  type='submit' name='newsUpdate' class="btn btn-success"  >Mise à jour de l'inscrit</button>
                                                <a href="b_table_newsletter.php" class="btn btn-danger"> CANCEL </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php
    require_once('../views/templates/b_footer.php');
?>