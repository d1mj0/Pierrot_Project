<?php
    
        //Variable avec le titre de la page;
    $title = ($article['title']);
    //Appel template header
    require_once("./templates/header.php");
    require_once('../src/controllers/ArticleController.php');

    $article = new ArticleController(NULL, NULL, NULL, NULL);
    $article = $article->getOneById(['id']);

    ?>


<section class="">
        
        
                <?php foreach($article as $values): ?>
                    <h1><?= ['title'];?></h1>
                    <p><?= ['text']; ?></p>
                
                <?php endforeach; ?>
            </table>
    </section>


