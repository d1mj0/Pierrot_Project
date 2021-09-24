<?php
    
    require_once('../src/controllers/ArticleController.php'); 

    if(isset($_FILES['img']) && $_FILES['img']['error'] === 0){
        $uploaddir = "./assets/img/";
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    }
    
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text'])&& isset($uploadfile)){
        $articlePost = new ArticleController($_POST['title'], $_POST['description'], $_POST['text'], $uploadfile);
        $articlePost->addArticle();
    
    }

    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles();
    
    $title = "Publication Article";
    
?>
    <head>
        <link href="../views/assets/css/styles.css" rel="stylesheet" />
        <link href="../views/assets/css/styles2.css" rel="stylesheet" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><img src="../views/assets/img/title_header.svg" alt="" class="navbar-img"></a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Paramètres</a></li>
                        <li><a class="dropdown-item" href="#!">Activité Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Déconnection</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Administration
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="publications_article.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Publication articles
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tableau articles
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Publication Articles Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
                            <li class="breadcrumb-item active">Publication Articles Blog</li>
                        </ol>
                        <div id="layoutArticle">
                        <div id="layoutContact_content">
                            <section>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Article</h3></div>
                                                    <div class="card-body">
                                                        <form enctype="multipart/form-data" action="blog_administration.php"  method="post">
                                                            <div>
                                                                <input name="title" class="form-control" id="title" type="text" placeholder="Titre"/>          
                                                                <label for="title">Titre</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <textarea id="description" name="description" type="text" cols="40" rows="6" placeholder=""></textarea>   
                                                                <label for="description">Description</label>
                                                            </div>
                                                            <div class="form-floating mb-3"> 
                                                                <textarea id="text" name="text" type="text" cols="40" rows="10"></textarea>  
                                                                <label for="text">Text</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="file" name="img" id="img">   
                                                                <label for="img">Photo</label>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                                <button>Ajouter un Article</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>    
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    </body>
</html>
