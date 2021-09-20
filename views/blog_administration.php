<?php
$title = "Admin";

require_once('../src/controllers/ArticleController.php');

if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0){
    $uploaddir = "./assets/img/";
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);

    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
}

if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text']) && !empty($_POST['photo'])){
    $article = new ArticleController($_POST);
    $article->addArticle();
}

$article = new ArticleController(NULL, NULL, NULL, NULL);
$articles = $article->listArticles();




require_once('./templates/header.php');

?>

<main>      
    <section>
        <table>
                <tr class="td_head">
                    <td>Id Articles</td>
                    <td>Photo</td>
                    <td>Titre</td>
                    <td>Description</td>
                    <td>Texte</td>
                    <td>Date et heure de publication</td>
                    <td>Action</td>
                </tr>
                <?php foreach($articles as $values): ?>
                <tr>
                    <td><?= $values['id_article']; ?></td>
                    <td><img width="100" height="100" src="<?= $values['photo']; ?>" alt=""></td>
                    <td><?= $values['title'];?></td>
                    <td><?= $values['description']; ?></td>
                    <td><?= $values['text'];  ?></td>
                    <td><?= $values['date_heure_publi']; ?></td>
                    <td>Action</td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div id="layoutArticle">
                <div id="layoutContact_content">
                    <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Article</h3></div>
                                            <div class="card-body">
                                                <form  action="blog_administration.php" method="POST">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="title" type="text" placeholder="Titre"/>          
                                                        <label for="title">Titre</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <textarea id="description" name="description" type="text" cols="40" rows="6" placeholder=""></textarea>   
                                                        <label for="description">Description</label>
                                                    </div>
                                                    <div class="form-floating mb-3"> 
                                                        <textarea id="text" name="text" type="text" cols="40" rows="10"></textarea>  
                                                        <label for="">Text</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="file" name="photo" id="photo">   
                                                        <label for="photo">Photo</label>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">

                                                        <button>Ajouter un Article</button>
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
