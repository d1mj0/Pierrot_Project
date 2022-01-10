<?php
    require_once('../src/config/Database.php');

    abstract class TravailModel{
        protected $connexion;
        public function __construct(){
            $database = new Database();
            $this->connextion = $database->getPDO();
        }
        public function insert($type, $title, $desc, $text, $img){
            $sql = "INSERT INTO `travaux` VALUES(:type, :title, :desc, :text, :img)";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':type'=>$type,
                ':title'=>$title,
                ':desc'=>$desc,
                ':text'=>$text,
                ':img'=>$img
            ]);
        }
        public function select($type){
            $sql = "SELECT * FROM `travaux` WHERE `type`=:type";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':type'=>$type
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function selectOne($id){
            $sql = "SELECT FROM `travaux` WHERE `id`=:id";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':id'=>$id
            ]);
            $result = $request->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function selectLast($type){
            $sql = "SELECT FROM `travaux` WHERE `type`=:type ORDER BY `date` DESC LIMIT 4";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':type'=>$type
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($id, $type, $title, $desc, $text, $img){
            $sql = "UPDATE `travaux` SET `type`=:type, `title`=:title, `desc`=:desc, `text`=:text, `img`=:img WHERE `id`=:id";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':type'=>$type,
                ':title'=>$title,
                ':desc'=>$desc,
                ':text'=>$text,
                ':img'=>$img,
                ':id'=>$id
            ]);
        }
        public function delete($id){
            $sql = "DELETE FROM `travaux` WHERE `id`=:id";
            $request = $this->connexion->prepare($sql);
            $request->execute([
                ':id'=>$id
            ]);
        }
    }
    class ArticleModel extends TravailModel{
        private $type = 'article';
        public function __construct(){
            parent::__construct();
        }
        public function insert($type, $title, $desc, $text, $img){
            $this->type = $type;
            parent::insert($type, $title, $desc, $text, $img);
        }
        public function select($type){
            $this->type = $type;
            parent::select($type);
        }
        public function selectOne($id){
            parent::selectOne($id);
        }
        public function selectLast($type){
            $this->type = $type;
            parent::selectLast($type);
        }
        public function update($id, $type, $title, $desc, $text, $img){
            $this->type = $type;
            parent::update($id, $type, $title, $desc, $text, $img);
        }
        public function delete($id){
            parent::delete($id);
        }
    }
    class PublicationModel extends TravailModel{
        private $type = 'publication';
        public function __construct(){
            parent::__construct();
        }
        public function insert($type, $title, $desc, $text, $img){
            $this->type = $type;
            parent::insert($type, $title, $desc, $text, $img);
        }
        public function select($type){
            $this->type = $type;
            parent::select($type);
        }
        public function selectOne($id){
            parent::selectOne($id);
        }
        public function selectLast($type){
            $this->type = $type;
            parent::selectLast($type);
        }
        public function update($id, $type, $title, $desc, $text, $img){
            $this->type = $type;
            parent::update($id, $type, $title, $desc, $text, $img);
        }
        public function delete($id){
            parent::delete($id);
        }
    }