<?php
    $title =  "Mise à jour d'inscription";

    require_once('../views/templates/b_header.php'); 
    require_once('../src/models/NewsletterModel.php'); 
    require_once('../src/controllers/NewsletterController.php');
   
    $newsMdl = new NewsletterModel();
    $newsRqst = $newsMdl->getOne($_GET['id']);

    if(isset($_POST['newsUpdate']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email'])){
        $id = $_POST['id'];
        $newsCtrl = new NewsletterController($_POST['name'], $_POST['lastname'], $_POST['email']);
        $newsCtrl->updateNewsletter($id);
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mise à jour de l'insription pour <?= $newsRqst[0]['name']; ?> <?= $newsRqst[0]['lastname']; ?></h1>
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
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de l'inscription pour <br><?= $newsRqst[0]['name']; ?><?= " ".$newsRqst[0]['lastname']; ?></h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_update_newsletter.php?<?= $newsRqst[0]['id_request']; ?>"  method="POST">
                                        <input type="hidden" name="id" value="<?= $newsRqst[0]['id_request']; ?>" />
                                            <label class="form-label" for="title">Prénom</label>
                                            <div class="form-floating mb-3">
                                                <input id="editName" class="form-control" name="name" type="text" value="<?= $newsRqst[0]['name']; ?>" required/>
                                            </div>
                                            <br>            
                                            <label class="form-label" for="description">Nom</label>
                                            <div class="form-floating mb-3">
                                                <input id="editLastName" class="form-control" name="lastname" type="text" value="<?= $newsRqst[0]['lastname']; ?>" required/>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Email</label>
                                            <div class="form-floating mb-3">
                                                <input id="editEmail" class="form-control" name="email" type="text" value="<?= $newsRqst[0]['email']; ?>" required/>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button  name='newsUpdate' id="newsUpdate" class="btn btn-primary m-2">Mettre à jour</button>
                                                <a href="b_table_newsletter.php" class="btn btn-primary m-2">Annuler</a>
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