<?php

$title =  "Mise à jour de l'article";

require_once('../views/templates/b_header.php'); 
require_once('../src/models/ArticleModel.php'); 
require_once('../src/controllers/ArticleController.php');






$articles = new ArticleModel;
$articleR = $articles->getOne($_GET['id']);

if(isset($_FILES['img']) && $_FILES['img']['error'] === 0){
    $uploaddir = "./assets/img/";
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
}

if(isset($_GET['id']) && isset($_POST['articleUpdate'])){
if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text']) && isset($uploadfile)){
$text = $_POST['text'];
$txtCtrl = new TextController();
$html = $txtCtrl->txt2html($text);
$articleUpdate = new ArticleController($_POST['title'], $_POST['description'], $html, $uploadfile);
$articleUpdate->updateArticle();

if(!$articleUpdate){
echo '<div class="alert alert-success>
<button type="button" class="close" data-dismiss="alert-success">
<strong>"L article a été mis à jour"</strong>
</div>';
header("location:b_table_article.php");
}

else{
echo '<div class="alert alert-danger>
<button type="button" class="close" data-dismiss="alert-danger">
<strong>"L article n a pas été mis a jour"</strong>
</div>';
header("location:b_update_article.php");
}

}
}


?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mise à jour de l'article <?= $articleR[0]['title']; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
            <li class="breadcrumb-item active">Mise à jour d'article</li>
        </ol>
        <div id="layoutArticle">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de l'article  <br><?= $articleR[0]['title']; ?></h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_update_article.php?<?= $articleR[0]['id'] ?>"  method="POST">
                                            
                                            <label class="form-label" for="title">Titre</label>
                                            <div class="form-floating mb-3">
                                                <input  id="editTitle" class="form-control" name="title"  type="text" value="<?= $articleR[0]['title']; ?>" required/>
                                            </div>
                                            <br>            
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-floating mb-3">
                                                <textarea  id="editDescription" class="form-control" name="description"  type="text" required ><?= $articleR[0]['description']; ?></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Texte</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="editText" class="form-control" name="text" type="text" cols="40" rows="10" required><?= $articleR[0]['text']; ?></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <label class="form-label" for="img">Illustration</label>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img" id="img" class="form-control" required>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0 alert alert-success">
                                                <button  type='submit' name='articleUpdate' data-dismiss="alert"  >Mise à jour de l'article</button>
                                                <a href="b_table_article.php" class="btn btn-danger"> CANCEL </a>
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