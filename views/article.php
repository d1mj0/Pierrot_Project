<?php
session_start();
    
        //Variable avec le titre de la page;
    $title = ($_SESSION['article']['title']);
    //Appel template header
    
    require_once('../src/controllers/ArticleController.php');

    
        $articleModel = new ArticleController(NULL, NULL, NULL, NULL);
        $articleRead = $articleModel->getOneById($_SESSION(['article']['id']));
    
    
    
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