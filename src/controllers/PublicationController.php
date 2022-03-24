<?php
    require_once("../src/models/PublicationModel.php");

    class PublicationController{
        private $title;
        private $description;
        private $text;
        private $img;
        public function __construct($title, $description, $text, $img){
            $this->setTitle($title);
            $this->setDesc($description);
            $this->setText($text);
            $this->setImg($img);
        }
        public function addPublication(){
            $publicModel = new PublicationModel();
            $publicModel->create($this->title, $this->description, $this->text, $this->img);
            header('Location: /views/b_index.php?table_publication');
            ob_end_flush();
        }
        public function updatePublication($id){
            $publicModel = new PublicationModel();
            $publicModel->update($this->title, $this->description, $this->text, $this->img, $id);
            header('Location: /views/b_index.php?table_publication');
            ob_end_flush();
        }
        public function deletePublication(){
            $publicModel = new PublicationModel();
            $publicModel->delete($this->title, $this->description, $this->text, $this->img);
            header('Location: /views/b_index.php?table_publication');
            ob_end_flush();
        }
        public function listPublication(){
            $publicModel = new PublicationModel();
            return $publicModel->getAll();
        }
        public function getOneById($id){
            $publicModel = new PublicationModel();
            return $publicModel->getOne($id);
        }

        public function listPubliChronoDesc(){
            $publicModel = new PublicationModel();
            return $publicModel->displayChronoDesc();
        }

        public function setTitle($title){    
            return $this->title = $title;
        }
        public function setDesc($description){    
            return $this->description = $description;
        }
        public function setText($text){
            return $this->text = $text;
        }
        public function setImg($img){
            return $this->img = $img;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getDesc(){  
            return $this->description;
        }
        public function getText(){
            return $this->text;
        }
        public function getImg(){
            return $this->img;
        }
    }
?>