<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    ob_start();
    $title =  "Suppression d'inscription";

    require_once('../views/templates/b_header.php'); 
    require_once('../src/models/NewsletterModel.php');
    
    $id = 0;
    $newsMdl = new NewsletterModel();
    $newsRqst = $newsMdl->getOne($_GET['id']);

    if(isset($_POST['newsDelete'])){
        $id = $_POST['idNewsletter'];
        $newsDlt = $newsMdl->delete($id);

        if($newsDlt){
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
        <h2 class="mb-5">Voulez-vous vraiment supprimer cette inscription?</h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <form action="b_delete_newsletter.php?<?= $_GET['id']; ?>" method="POST">   
                        <input type="hidden" name="idNewsletter" value="<?= $_GET['id']; ?>">
                        <div class="card m-4 ">
                            <div class="card-body">
                                <table id="datatablesSimple" class="container-fluid">
                                    <thead>
                                        <tr>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $newsRqst[0]['name']; ?></td>
                                            <td><?= $newsRqst[0]['lastname']; ?></td>
                                            <td><?= $newsRqst[0]['email']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" name="newsDelete"  value="Supprimer">
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