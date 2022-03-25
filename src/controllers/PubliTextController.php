<?php

require_once('../src/models/PubliTextModel.php');


class PubliTextController {
    private $id_publi;
    private $title_part;
    private $text;

    

    public function __construct($id_publi, $title_part, $text){
        $this->setIdPubli($id_publi); 
        $this->setTitlePart($title_part); 
        $this->setText($text); 
        
    }
    public function addText(){
        $publiText = new PubliTextModel();        
        $publiText->create($this->id_publi, $this->title_part, $this->text);
        header('Location: b_index.php?page=publi_publi');
        ob_end_flush();
    }
    public function updateText($id){
        $publiText = new PubliTextModel();
        $publiText->update($this->id_publi, $this->title_part, $this->text, $id);
        header('Location: b_index.php?page=table_publi');
        ob_end_flush();
    }
    public function deleteText($id){
        $publiText = new PubliTextModel();
        $publiText->delete($this->id_publi, $id);
    }

    public function listText(){
        $publiText = new PubliTextModel();
        return $publiText->getEverythingText();
    }

    public function listText2(){
        $publiText = new PubliTextModel();
        return $publiText->getEverythingImgList();
    }

    public function getOneById($id){
        $publiText = new PubliTextModel();
        return $publiText->getOne($$id);
    }
    ////////////////////////////////////
    // Encapsulation : getter / setter
    ////////////////////////////////////

    // On pourrait sécuriser chaque champ plus en détails. 

    public function getIdPubli(){
        return $this->id_publi;
    }

    public function setIdPubli($id_publi){
        return $this->id_publi = $id_publi;
    }

    public function getTitlePart(){
        return $this->title_part;
    }

    public function setTitlePart($title_part){
        return $this->title_part = $title_part;
    }


    public function getText(){
        return $this->text;
    }

    public function setText($text){
        return $this->text = $text;
    }


}
?>