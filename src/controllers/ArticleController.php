<?php
session_start(); // session_start permet de créer la session ou d'en récupérer une déjà existante. 

// Les controllers s'occupent du traitement des données. 

// require_once('../src/config/Database.php'); // Attention aux chemins relatifs. Ici Database est appelée depuis inscription.php.
require_once('../src/models/ArticleModel.php');

// Il faut sécuriser les données dans deux cas :
// - Les fautes de frappes 
// - Les failles de sécurité (faille XSS)

class ArticleController {


    private $title;

    
    private $desc;


    private $text;


    private $photo;

    public function __construct($title, $desc, $text, $photo){
        $this->setTitle($title);
        $this->setDesc($desc);
        $this->setText($text);
        $this->setPhoto($photo);
    }

    
    public function addArticle(){
        $articleModel = new ArticleModel();
        $articleModel->create($this->title, $this->desc, $this->text, $this->photo);
    }

    public function listArticle(){
        $articleModel = new ArticleModel();
        return $articleModel->getAll();
    }

    

    ////////////////////////////////////
    // Encapsulation : getter / setter
    ////////////////////////////////////

    // On pourrait sécuriser chaque champ plus en détails. 


    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        
            return $this->title = $title;
        }
    


    public function getDesc(){  
        return $this->desc;
    }

    public function setDesc($desc){
        
            return $this->desc = $desc;
        
    }

    
    public function getText(){
        return $this->text;
    }

    public function setText($text){
        return $this->text = $text;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function setPhoto($photo){
        return $this->photo = $photo;
    }

}

?>