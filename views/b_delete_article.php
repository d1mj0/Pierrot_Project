<?php
ob_start();
$title =  "Suppression d'article";

require_once('../views/templates/b_header.php'); 
require_once('../src/models/ArticleModel.php'); 
require_once('../src/models/ArticleModel.php'); 

$id= 0;

$articles = new ArticleModel;
$articleR = $articles->getOne($_GET['id']);


if(isset($_POST['deleteArticle'])){
    $id = $_POST['idArticle'];

$articleDelete = new ArticleModel;
$articleD = $articleDelete->delete($id);

if($articleD){
echo '<div class="alert alert-success>
<button type="button" class="close" data-dismiss="alert-success">
<strong>"L article a été supprimé"</strong>
</div>';
}
else{
echo '<div class="alert alert-danger>
<button type="button" class="close" data-dismiss="alert-danger">
<strong>"L article n a pas été supprimé"</strong>
</div>';
}
}
?>
<main>
    <section class="text-center">
        <br>
        <br>
        <h2 class="mb-5">Voulez-vous vraiment supprimer cette article?</h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <form action="b_delete_article.php?<?= $_GET['id']; ?>" method="POST">   
                        <input type="hidden" name="idArticle" value="<?= $_GET['id']; ?>">
                        <div class="card m-4 ">
                            <div class="bg-image">
                                <img class="img-fluid" src="<?= $articleR[0]['img']; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $articleR[0]['title']; ?></h5> 
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" name="deleteArticle"  value="Supprimer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<main>
<?php
    require_once('../views/templates/b_footer.php');
?>