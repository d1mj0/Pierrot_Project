<?php
    require_once("../src/models/PublicationModel.php");

    class PublicationController{
        private $title;
        private $description;
        private $text;
        private $img;
        public function __construct($title, $description, $text, $image){
            $this->setTitle($title);
            $this->setDesc($description);
            $this->setText($text);
            $this->setImg($image);
        }
        public function addPublication(){
            $publicModel = new PublicationModel();
            $publicModel->create($this->title, $this->description, $this->text, $this->img);
        }
        public function updatePublication(){
            $publicModel = new PublicationModel();
            $publicModel->update($this->title, $this->description, $this->text, $this->img);
        }
        public function deletePublication(){
            $publicModel = new PublicationModel();
            $publicModel->delete($this->title, $this->description, $this->text, $this->img);
        }
        public function listPublication(){
            $publicModel = new PublicationModel();
            return $publicModel->getAll();
        }
        public function getOneById($id){
            $publicModel = new PublicationModel();
            return $publicModel->getOne($id);
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