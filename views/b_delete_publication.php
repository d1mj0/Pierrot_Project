<?php
    ob_start();
    $title =  "Suppression de la publication";

    require_once('../views/templates/b_header.php'); 
    require_once('../src/models/PublicationModel.php');


    $publiMdl = new PublicationModel();
    $publiRqst = $publiMdl->getOne($_GET['id']);

    if(isset($_POST['publiDelete'])){
        $id = $_POST['idPubli'];
        $publiDlt = $publiMdl->delete($id);

        if($publiDlt){
            echo    '<div class="alert alert-success>
                        <button type="button" class="close" data-dismiss="alert-success">
                        <strong>"La publication a été supprimé"</strong>
                    </div>';
        }
        else{
            echo    '<div class="alert alert-danger>
                        <button type="button" class="close" data-dismiss="alert-danger">
                        <strong>"La publication n\'a pas été supprimé"</strong>
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
                        <form action="b_delete_publication.php?<?= $_GET['id']; ?>" method="POST">   
                            <input type="hidden" name="idPubli" value="<?= $_GET['id']; ?>">
                            <div class="card m-4 ">
                                <div class="bg-image">
                                    <img class="img-fluid" src="<?= $publiRqst[0]['img']; ?>" alt="<?= $publiRqst[0]['title']; ?>">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $publiRqst[0]['title']; ?></h5> 
                                </div>
                                <div>
                                    <input type="submit" name="publiDelete" value="delete">
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