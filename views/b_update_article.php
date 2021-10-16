<?php

require_once('../views/templates/b_header.php'); 
require_once('../src/models/ArticleModel.php'); 



$title =  "Mise à jour d'article";




$articles = new ArticleModel;
$articleR = $articles->getOne($_GET['id']);


if(isset($_POST['updateArticle'])){
$id = $_POST['idArticle'];

$articleUpdate = new ArticleModel;
$articleU = $articleUpdate->update($title, $description, $text);

if($articleU){
echo '<div class="alert alert-success>
<button type="button" class="close" data-dismiss="alert-success">
<strong>"L article a été supprimé"</strong>
</div>';
}
else{
echo '<div class="alert alert-danger>
<button type="button" class="close" data-dismiss="alert-danger">
<strong>"L article a été supprimé"</strong>
</div>';
}
}

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mise à jour Articles Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
            <li class="breadcrumb-item active">Mise à jour Articles Blog</li>
        </ol>
        <div id="layoutArticle">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Article</h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_publication_articles.php"  method="post">
                                            <label class="form-label" for="title">Titre</label>
                                            <div class="form-floating mb-3">
                                                <input  id="editTitle" class="form-control" name="title"  type="text" value="<?= $articleR[0]['title']; ?>"/>
                                            </div>
                                            <br>
                                            <label class="form-label" for="editDescription">Description</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="editDescription" class="form-control" name="editDescription" type="text" value="<?= $articleR[0]['text']; ?>" cols="40" rows="6"></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Texte</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="ediText" class="form-control" name="text" type="text" value="<?= $articleR[0]['description']; ?>" cols="40" rows="10"></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0 alert alert-success">
                                                <button  data-dismiss="alert"  >Mise à jour de l'article</button>
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