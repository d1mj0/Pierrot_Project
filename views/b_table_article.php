<?php
    $title = "Tableau articles"; 

    require_once('../views/templates/b_header.php'); 
    require_once('../src/controllers/ArticleController.php');
    require_once('../src/models/ArticleModel.php');

    

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();
    


?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Articles</h1>
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
                        <tr class="tr">
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
                                <td><?= (strlen($values['description']) > 40) ? substr($values['description'], 0, 40)."..." : ($values['description'])?></td>
                                <td><?= (strlen($values['text']) > 40) ? substr($values['text'], 0, 40)."..." : ($values['text']) ;?></td>
                                <td><?= $values['date_time_publi']; ?></td>
                                <td><a href="b_update_article.php?id=<?= $values['id_article']; ?>" name="articleUpdate"><i class="fas fa-edit mx-2"></i></a> <a href="b_delete_article.php?id=<?= $values['id_article']; ?>" name="articleDelete"><i class="fas fa-trash mx-2"></i> <a href="b_view_article.php?id=<?= $values['id_article']; ?>" name="articleDelete"><i class="far fa-eye mx-2"></i></td>
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