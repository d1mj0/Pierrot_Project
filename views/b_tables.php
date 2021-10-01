<?php
    
    require_once('../src/controllers/ArticleController.php'); 

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();

    
        $articleUpdate = new ArticleController(NULL, NULL, NULL, NULL);
        $articleU = $articleUpdate->updateArticle();
    

        $articleDelete = new ArticleController(NULL, NULL, NULL, NULL);
        $articleD = $articleDelete->deleteArticle();
    

    $title = "tables";
    require_once('../views/templates/b_header.php'); 
    
?>
    
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Article</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="tables.php">Administration</a></li>
                            <li class="breadcrumb-item active">Tableau articles</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Articles
                            </div>
                            <div class="card-body ">
                                <table id="datatablesSimple" class="container-fluid">
                                    <thead>
                                        <tr>
                                            <th>Id Article</th>
                                            <th>Illustration</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Texte</th>
                                            <th>date de publication</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($articles as $values): ?>
                                            <tr>
                                                <td><?= $values['id_article']; ?></td>
                                                <td><img width="100" height="100" src="<?= $values['img']; ?>" alt=""></td>
                                                <td><a href="article.php?id_article=<?= $values['id_article']; ?>"><?= $values['title']; ?></a></td>
                                                <td><?= $values['description'];?></td>
                                                <td><?= $values['text'];?></td>
                                                <td><?= $values['date_time_publi']; ?></td>
                                                <td><i class="fas fa-edit"><?= $articleU; ?></i>  <i class="fas fa-trash-alt"><?= $articleD; ?></i></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php

require_once('../views/templates/b_footer.php'); 

?>