<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $title = "Publication Publication";
    require_once('../views/templates/b_header.php');
    require_once('../src/controllers/PublicationController.php');

    if(isset($_FILES['img']) && $_FILES['img']['error'] === 0){
        $uploaddir = "./assets/img/";
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    }

    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['text'])&& isset($uploadfile)){
        
        $text = $_POST['text'];
        $text_array = explode("\n", $text);
        $html_array = [];
        foreach($text_array as $line){
            if(strlen($line) == 0){
                continue;
            }
            else{
                $html_p = "<p>" . $line . "</p>";
                array_push($html_array, $html_p);
            }
        }
        $html = implode("\n", $html_array);

        $publicController = new PublicationController($_POST['title'], $_POST['description'], $html, $uploadfile);
        $publicController->addPublication();
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Publication Publication</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
            <li class="breadcrumb-item active">Publication Publication</li>
        </ol>
        <div id="layoutArticle">
        <div id="layoutContact_content">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Publication</h3></div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="b_publication_publication.php"  method="post">
                                            <label class="form-label" for="title">Titre</label>
                                            <div class="form-floating mb-3">
                                                <input name="title" class="form-control" id="title" type="text" placeholder="Titre"/>
                                            </div>
                                            <br>
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="description" class="form-control" name="description" type="text" cols="40" rows="6" maxlength="1000"></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="text">Text</label>
                                            <div class="form-floating mb-3">
                                                <textarea id="text" class="form-control" name="text" type="text" cols="40" rows="10" maxlength="10000"></textarea>
                                            </div>
                                            <br>
                                            <label class="form-label" for="img">Photo</label>
                                            <div class="form-floating mb-3">
                                                <input type="file" name="img" id="img" class="form-control">
                                            </div>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0 alert alert-success">
                                                <button  data-dismiss="alert">Ajouter une publication</button>
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

<?php
    require_once('../views/templates/b_footer.php');
?>