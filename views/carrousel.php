<main>
    <div id="index" class="splide container-fluid">
        <div class="splide__track row">
            <ul class="splide__list col-lg-12">
                <?php foreach ($articles as $values): ?>
                    <li class="splide__slide">
                        <img class="img-fluid" src="<?= $values['img']; ?>" alt="">
                        <div class="container-fluid shape-container mx-auto d-none d-sm-none d-md-block d-lg-block"><h3><a href="../views/article.php?id=<?= $values['id_article']; ?>"><?= $values['title'];?></a></h3></div>
                        <div class="container-fluid shape-container mx-auto d-block d-sm-block d-lg-none"><h3><a href="../views/article.php?id=<?= $values['id_article']; ?>"><?= $values['title'];?></a></h3></div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="slider-progress-bar">
            <div id="progress-bar"class="progress-bar"></div>
        </div>
    </div>
</main>
