<?php
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'accueil':
                $title = 'Accueil';
                break;
            case 'pensee_globale':
                $title = 'Pensée globale';
                break;
            case 'travaux':
                $title = 'Travaux et publications';
                break;
            case 'blog':
                $title = 'Blog';
                break;
            case 'a_propos':
                $title = 'À propos';
                break;
            case 'sites_amis':
                $title = 'Sites amis';
                break;
            case 'contact':
                $title = 'Contact';
                break;
            case 'newsletter':
                $title = 'Newsletter';
                break;
            case 'mentions_legales':
                $title = 'Mentions legales';
                break;
                case 'login':
                    $title = 'Login';
                    break;
        }
    }
    else{
        $title = 'Accueil';
    }
    require_once('./templates/header.php');
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'accueil':
                require_once('carrousel.php');
                require_once('pensee_globale.html');
                require_once('travaux_et_publications.php');
                break;
            case 'pensee_globale':
                require_once('pensee_globale.html');
                break;
            case 'travaux':
                require_once('travaux_et_publications.php');
                break;
            case 'blog':
                require_once('blog.php');
                break;
            case 'a_propos':
                require_once('a_propos.html');
                break;
            case 'sites_amis':
                require_once('sites_amis.html');
                break;
            case 'contact':
                require_once('contact.php');
                break;
            case 'newsletter':
                require_once('newsletter.php');
                break;
            case 'mentions_legales':
                require_once('mentions_legales.html');
                break;
            case 'login':
                require_once('login.php');
                break;
        }
    }
    else{
        require_once('carrousel.php');
        require_once('pensee_globale.html');
        require_once('travaux_et_publications.php');
    }
    require_once('./templates/footer.html');