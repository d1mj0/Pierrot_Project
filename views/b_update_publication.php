<?php
    ob_start();
    $title =  "Mise à jour de la publication";
    require_once('../views/templates/b_header.php'); 
    require_once('../src/models/PublicationModel.php'); 
    require_once('../src/controllers/PublicationController.php');


    $publiMdl = new PublicationModel();
    $publiRqst = $publiMdl->getOne($_GET['id']);

    if(isset($_FILES['img']) && $_FILES['img']['error'] === 0){
        $uploaddir = "./assets/img/";
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    }

    if(isset($_POST['publiUpdate']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text']) && isset($uploadfile)){
        $id = $_POST['id'];
        $publiCtrl = new PublicationController($_POST['title'], $_POST['description'], $_POST['text'], $uploadfile);
        $publiCtrl->updatePublication($id);
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mise à jour de la publication <?= $publiRqst[0]['title']; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
            <li class="breadcrumb-item active">Mise à jour de la publication</li>
        </ol>
        <div id="layoutArticle">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de l'article  <br><?= $publiRqst[0]['title']; ?></h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_update_publication.php?<?= $publiRqst[0]['id']; ?>"  method="POST">
                                        <input type="hidden" name="id" value="<?= $publiRqst[0]['id_publi']; ?>" />
                                            <label class="form-label" for="title">Titre</label>
                                            <div class="form-floating mb-3">
                                                <input  id="editTitle" class="form-control" name="title"  type="text" value="<?= $publiRqst[0]['title']; ?>" required/>
                                            </div>
                                            <br>            
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-floating mb-3">
                                                <textarea  id="editDescription" class="form-control" name="description"  type="text" required ><?= $publiRqst[0]['description']; ?></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Texte</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="editText" class="form-control" name="text" type="text" cols="40" rows="10" required><?= $publiRqst[0]['text']; ?></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <label class="form-label" for="img">Illustration</label>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img" id="img" class="form-control" required>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button  name='publiUpdate' id="publiUpdate" class="btn btn-primary m-2">Mettre à jour</button>
                                                <a href="b_table_publication.php" class="btn btn-primary m-2">Annuler</a>
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