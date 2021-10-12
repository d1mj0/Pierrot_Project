<?php

require_once('../src/controllers/ArticleController.php'); 




if(isset($_REQUEST['id_article']) && is_numeric($_REQUEST['id_article']))
{
    $articleDelete = new ArticleController(NULL, NULL, NULL, NULL);
    $articleD = $articleDelete->deleteArticle();
}



?>