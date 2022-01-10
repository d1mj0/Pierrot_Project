<?php
    require_once('../src/controllers/ArticleController.php');
    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles3();
?>
<br>
<br>
<section class="blog">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-9 m-auto ">
            <div id="carouselIndex" class="carousel slide carouselI" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <?php 
                    $i = 0; 
                    foreach($articles as $values){
                        $actives = '';
                        if($i == 0){
                            $actives ='active'; 
                        }  
                    ?>
                    <div>
                        <button type="button" data-bs-target="#carouselIndex" data-bs-slide-to="<?= $i; ?>" class="p-2 m-3 <?= $actives; ?>"></button>
                    </div>
                    <?php 
                        $i++; 
                    } 
                    ?>
                </div>
                <div class="carousel-inner">
                <?php 
                    $i = 0; 
                    foreach($articles as $values){
                        $actives = '';
                        if($i == 0){
                            $actives ='active'; 
                        }  
                    ?>
                    <div class="carousel-item <?= $actives; ?>">
                        <img class="d-block img-fluid" src="<?= $values['img']; ?>" alt="<?= $values['title']; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="mb-3"><?= $values['title'];?></h5>
                            <p><?= $values['description']; ?></p>
                            <br>
                            <a href="../views/article.php?id=<?= $values['id_article']; ?>" class="button btn-lg btn-primary">Lire l'article</a>
                        </div>
                    </div>
                    <?php 
                        $i++; 
                    } 
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndex" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIndex" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>