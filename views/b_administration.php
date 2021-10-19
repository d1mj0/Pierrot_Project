<?php

$title =  "Administration";

require_once('../views/templates/b_header.php'); 



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
        <div class="album py-5" id="btnAdmin">
        <div class="container-fluid">
            <div class="row justify-content-around">
            
                <div class="col-lg-4 col-md-12">
                
                    <div class="card m-4 ">
                    <a href="b-publication_article.php" class=" btn  btn-light ripple" role="button">
                        <div class="bg-image">
                            <img class="img-fluid" src="../views/assets/img/article.png" alt="">
                            <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Publier un article de blog</h5> 
                        </div>
                        </a>
                    </div>
                    
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="card m-4">
                        <div class="bg-image">
                            <img class="img-fluid" src="../views/assets/img/publi.png" alt="">
                            <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            
                            <a href="b-publication_article.php" class="btn btn-primary ripple px-4" role="button">Ajouter une publication</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-4 col-md-12">
                        <div class="card m-4">
                            <div class="bg-image">
                                <img class="img-fluid" src="../views/assets/img/edit_article.png" alt="">
                                <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                
                                <a href="b-publication_article.php" class="btn btn-primary ripple px-4" role="button">Consulter/modifier un article de blog</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card m-4">
                            <div class="bg-image">
                                <img class="img-fluid" src="../views/assets/img/edit_newsletter.png" alt="">
                                <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                
                                <a href="b-publication_article.php" class="btn btn-primary ripple px-4" role="button">Consulter/modifier une inscription à la newsletter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card m-4">
                            <div class="bg-image">
                                <img class="img-fluid" src="../views/assets/img/edit_publi.png" alt="">
                                <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                
                                <a href="b-publication_article.php" class="btn btn-primary ripple px-4" role="button">Consulter/modifier une Publication</a>
                            </div>
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
