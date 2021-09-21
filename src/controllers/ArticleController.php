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

    
    private $description;


    private $text;


    private $photo;

    public function __construct($title, $description, $text, $img){
        $this->setTitle ($title);
        $this->setDesc($description);
        $this->setText($text);
        $this->setPhoto($img);
    }



public function addArticle(){
    
        if(isset($this->title) && isset($this->description) && isset($this->text) && isset($this->img)){
            $articleModel = new ArticleModel();
            $articleModel->add($this->title,  $this->description, $this->text, $this->img);
            header('Location: blog_administration.php');

        
    }
}
    // public function addArticle(){
    //     $article = new ArticleModel();
    //     $article->add($this->title, $this->description, $this->text, $this->photo);
    // }

    public function listArticles(){
        $article = new ArticleModel();
        return $article->getAll();
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
        return $this->description;
    }

    public function setDesc($description){
        
            return $this->description = $description;
        
    }

    
    public function getText(){
        return $this->text;
    }

    public function setText($text){
        return $this->text = $text;
    }

    public function getPhoto(){
        return $this->img;
    }

    public function setPhoto($img){
        return $this->img = $img;
    }

}

?>