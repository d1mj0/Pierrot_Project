<?php
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'administration':
                $title = 'Administration';
                break;
            case 'publi_article':
                $title = 'Publication article';
                break;
            case 'publi_publi':
                $title = 'Publication et Travaux';
                break;
            case 'table_article':
                $title = 'Table Article';
                break;
            case 'update_article':
                $title = 'Mise à jour de l\'article';
                break;
            case 'update_publi':
                $title = 'Mise à jour da la publication';
                break;
            case 'delete_article':
                $title = 'Suppression de l\'article';
                break;
            case 'delete_publi':
                $title = 'Suppression de la publication';
                break;
            case 'table_publi':
                $title = 'Table Travaux et Publis';
                break;
            case 'table_newsletter':
                $title = 'Table Newsletter';
                break;
            case 'deconnexion':
                $title = 'Deconnexion';
                break;
        }
    }
    else{
        $title = 'Administration';
    }
    require_once('../views/templates/b_header.php');
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'administration':
                require_once('b_administration.php');
                break;
            case 'table_article':
            require_once('b_table_article.php');
                break;
            case 'table_publi':
                require_once('b_table_publication.php');
                break;
            case 'table_newsletter':
                require_once('b_table_newsletter.php');
                break;
            case 'publi_article':
                require_once('b_publication_articles.php');
                break;
            case 'publi_publi':
                require_once('b_publication_publication.php');
                break;
            case 'update_article':
                require_once('b_update_article.php');
                break;
            case 'update_publi':
                require_once('b_update_publication.php');
                break;
            case 'delete_article':
                require_once('b_delete_article.php');
                break;
            case 'delete_publi':
                require_once('b_delete_publication.php');
                break;
            case 'deconnexion':
                require_once('b_deconnexion.php');
                break;
        }
    }
    else{
        require_once('b_admnistration.php');
    }
    require_once("../views/templates/b_footer.html");
?>