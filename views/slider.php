<?php
    require_once('../src/controllers/ArticleController.php');
    $articleSelect = new ArticleController(NULL, NULL, NULL, NULL);
    $articles = $articleSelect->listArticles3();
?>