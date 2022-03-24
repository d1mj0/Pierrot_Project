<?php

$title =  "Administration";

require_once('../views/templates/b_header.php'); 

session_start();
if(!isset($_SESSION['user'])){
    header("location: ../views/login.php");
    exit;
}else{
    $_SESSION['user'];
}  


?>
<main class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="title col-12 p-2">
              <h2>Administration</h2>
          </div>
        </div>
      </div>
      <br>
    <section class="text-center">
        <h4 class="mb-5"></h4>
        <div class="album py-5">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-lg-3 col-md-12">
                        <div class="card m-4 ">
                        <a href="b_publication_articles.php" class="btnAdmin btn  btn-light ripple py-0" role="button">
                            <div class="bg-image">
                                <img class="img-fluid" src="../views/assets/img/article.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Publier un article de blog</h5> 
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card m-4 ">
                        <a href="b_publication_publication.php" class="btnAdmin btn  btn-light ripple py-0" role="button">
                            <div class="bg-image">
                                <img class="img-fluid" src="../views/assets/img/publi.png" alt="">                          
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Ajouter une publication</h5> 
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-12">
                            <div class="card m-4">
                                <a href="b_table_article.php" class="btnAdmin btn  btn-light ripple p-0" role="button">
                                <img class="img-fluid" src="../views/assets/img/edit_article.png" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Consulter/modifier un article de blog</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card m-4">
                                <a href="b_table_newsletter.php" class="btnAdmin btn btn-light ripple p-0" role="button">
                                        <img class="img-fluid" src="../views/assets/img/edit_newsletter.png" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Consulter/modifier inscription newsletter</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card m-4">
                                <a href="b_table_publication.php" class="btnAdmin btn  btn-light ripple p-0" role="button">
                                        <img class="img-fluid" src="../views/assets/img/edit_publi.png" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Consulter/modifier une Publication</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> 
</main>
<?php
    require_once('../views/templates/b_footer.php');
?>
