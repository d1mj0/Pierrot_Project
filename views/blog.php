    <?php
        //Variable avec le titre de la page;
    $title = "Blog";
    //Appel template header
    require_once("./templates/header.php");
    require_once('../src/controllers/ArticleController.php');

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();

    ?>

<main class="my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="title col-12">
            <h2>Blog</h2>
        </div>
      </div>
    </div>
      <br>
      <section class="text-center">
        <h4 class="mb-5"><strong>Derniers articles</strong></h4>
        <div class="album py-5">
          <?php foreach($articles as $values): ?>
            <div class="container">
        
              <div class="row">
              
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card shadow-lg">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    
                      <img width="100" height="100" src="<?= $values['img']; ?>" alt="">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(#5c5c5c);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?= $values['title']; ?></h5>
                      <p class="card-text"><?= $values['description']; ?></p>
                      <a href="#!" class="btn ">Lire</a>
                    </div>
                    
                </div>
                
            </div>
          <?php endforeach; ?>
        </div>

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Suivant</a>
          </li>
        </ul>
      </nav>
    
  </main>
    
  <?php
    //Appel template footer
    require_once("./templates/footer.php");
  ?>