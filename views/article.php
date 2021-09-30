<?php

    
    $title = ($_SESSION['article']['title']);
    
    require_once('../src/controllers/ArticleController.php');

    if(isset($_GET['title']) && isset($_GET['description']) && isset($_GET['text']) && isset($_GET['img'])){
    $article = new ArticleController($_GET['title'], $_GET['description'], $_GET['text'], $_GET['img']);
    $articleR = $article->getOneById($_SESSION(['article']['id']));

    }

    require_once("./templates/header.php");

    ?>

    <main>
        <br>
        <br>
        <div class="container-fluid">
                <div class="row">
                    <div class="title col-lg-12">
                        <h2>Blog</h2>
                    </div>  
                </div>
            </div>
        <br>
        <div class="container-fluid">
                <div class="row">
                    <div class=" col-12 mx-auto">
                        <h3><?=$_SESSION['article']['title']?></h3>
                    </div>  
                </div>
            </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?=$_SESSION['article']['img']?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <p class="text"><?=$_SESSION['article']['text']?></p>
                    </div>
                </div>
            </div>                             
        </section>
        <br>
        <br>
    </main>

<?php
    require_once("./templates/footer.php");
?>