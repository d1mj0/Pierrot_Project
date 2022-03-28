<?php
require_once('../src/controllers/PubliTextController.php');  
require_once('../src/controllers/PublicationController.php');

$publiSelect = new PublicationController(NULL, NULL, NULL);
$publiS = $publiSelect->listPublication();

if(!empty($_POST['id_publi']) && !empty($_POST['titlePart']) && !empty($_POST['text'])){
    $galleryPST = new PubliTextController($_POST['id_publi'], $_POST['titlePart'], $_POST['text']);
    $galleryPST->addText();    
}

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Publication Texte</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/views/b_index?page=administration">Administration</a></li>
                <li class="breadcrumb-item active">Publication Texte</li>
            </ol>
        <div id="layoutArticle">
            <div id="layoutContact_content">
                <section>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Série</h3></div>
                                        <div class="card-body">
                                            <form enctype="multipart/form-data" action="<?= htmlspecialchars("b_index.php?page=publi_text"); ?>"  method="POST">
                                                <label for="id_gallery">Texte</label>
                                                <select name="id_publi" id="id_publi">
                                                    <?php foreach($publiS as $values): ?>
                                                        <option value="<?= $values['id_publi']; ?>"><?= $values['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <br>
                                                <label class="form-label" for="img">Titre partie</label>
                                                    <div class="form-floating mb-3 drop-zone">
                                                        <input name="titlePart" type="text"  class="form-control" >
                                                    </div>
                                                <br>
                                                <label class="form-label" for="img">Texte</label>
                                                    <div class="form-floating mb-3">
                                                        <input name="text" type="text" class="form-control">
                                                    </div>
                                                <br>
                                                <div id="uploaded_image" class="row mt-5"></div>
                                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                    <button  name="textPost" type="submit" class="btn btn-primary">Ajouter un texte</button>
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
<br>
                              