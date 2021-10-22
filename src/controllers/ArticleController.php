<?php


// require_once('../src/config/Database.php'); // Attention aux chemins relatifs. Ici Database est appelée depuis inscription.php.
require_once('../src/models/ArticleModel.php');

// Il faut sécuriser les données dans deux cas :
// - Les fautes de frappes 
// - Les failles de sécurité (faille XSS)

class ArticleController {

    private $title;

    
    private $description;


    private $text;


    private $img;

    public function __construct($title, $description, $text, $img){
        $this->setTitle ($title);
        $this->setDesc($description);
        $this->setText($text);
        $this->setImg($img);
    }




    public function addArticle(){
        $articleModel = new ArticleModel();
        $articleModel->create($this->title, $this->description, $this->text, $this->img);
        header('Location: b_table_article.php');
        ob_end_flush();
    }

    public function updateArticle($id){
        $articleModel = new ArticleModel();
        $articleModel->update($this->title, $this->description, $this->text, $this->img, $id);
        header('Location: b_table_article.php');
        ob_end_flush();
    }

    public function deleteArticle($id){
        $articleModel = new ArticleModel();
        $articleModel->delete($this->title, $this->description, $this->text, $this->img, $id);
        header('Location: b_table_article.php');
        ob_end_flush();
    }

    
    public function listArticles(){
        $articleModel = new ArticleModel();
        return $articleModel->getAll();
    }

    public function listArticles3(){
        $articleModel = new ArticleModel();
        return $articleModel->getAll3();
    }


    public function getOneById($id){
        $articleModel = new articleModel();
        return $articleModel->getOne($id);
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

    public function getImg(){
        return $this->img;
    }

    public function setImg($img){
        return $this->img = $img;
    }

}
?>