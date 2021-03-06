<?php
    require_once('../src/controllers/ArticleController.php');
    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();
?>
<main class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="title col-12 p-2">
                <h2 >Blog</h2>
            </div>
        </div>
    </div>
    <br>
    <section class="text-center">
        <h4 class="mb-5 blog"><strong>Derniers articles</strong></h4>
        <div class="album py-5">
            <div class="container-fluid">
                <div class="row ">
                    <?php foreach($articles as $values): ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="card m-4">
                                <div class="bg-image">
                                    <img class="img-fluid" src="<?= $values['img']; ?>" alt="">
                                    <a href="article.php?id=<?= $values['id_article']; ?>">
                                        <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $values['title']; ?></h5>
                                    <p class="card-text"><?= (strlen($values['description']) > 60) ? substr($values['description'], 0, 60)."..." : ($values['description']) ;?></p>
                                    <a href="article.php?id=<?= $values['id_article']; ?>" class="btn btn-primary ripple px-4" role="button">Lire</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <nav class="my-4" aria-label="...">     <!-- Pagination -->
        <ul class="pagination pagination-circle justify-content-center">
            <li class="page-item active">
                <a class="page-link btn " href="#" tabindex="-1" aria-disabled="true">Pr??c??dent</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </nav>
</main>