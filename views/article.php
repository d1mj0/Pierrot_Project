<?php

    
    
    
    require_once('../src/models/ArticleModel.php');

   /* if(isset($_GET['title']) && isset($_GET['description']) && isset($_GET['text']) && isset($_GET['img'])){
    $article = new ArticleController($_GET['id']);
    $articleR = $article->getOneById($_SESSION(['article']['id']));

    }*/
 
    
    $articles = new ArticleModel;
    $articleR = $articles->getOne($_GET['id']);

    /*$title = $articleR['title'];*/

var_dump($articleR);
var_dump(($articleR[0]['title']), '1');

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
                        <h3><?=$articleR[0]['title']; ?></h3>
                    </div>  
                </div>
            </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?=$articleR[0]['img']; ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <p class="text"><?=$articleR[0]['text']; ?></p>
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