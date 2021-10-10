<?php
    require_once("../src/config/Database.php");

    class PublicationModel{
        private $connexion;
        public function __construct(){
            $database = new Database();
            $this->connexion = $database->getPDO();
        }
        public function create($title, $description, $text, $img){
            $request = $this->connexion->prepare('INSERT INTO `publication`(`title`, `description`, `text`, `img`) VALUES (:title, :description, :text, :img)');
            $request->execute([
                ':title'=>$title,
                ':description'=>$description,
                ':text'=>$text,
                ':img'=>$img
            ]);
        }
        public function getAll(){
            $request = $this->connexion->prepare('SELECT * FROM `publication`');
            $request->execute();
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getOne($id){
            $request = $this->connexion->prepare('SELECT * FROM `publication` WHERE `id_publi`=:id');
            $request->execute([':id'=>$id]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($title, $description, $text, $img){
            $request = $this->connexion->prepare('UPDATE `publication` SET `title`=:title, `description`=:description, `text`=:text, `img`=:img');
            $request->execute([
                ':title'=>$title,
                ':description'=>$description,
                ':text'=>$text,
                ':img'=>$img
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function delete($id){
            $request = $this->connexion->prepare('DELETE FROM `publication` WHERE `id_publi`=:id');
            $request->execute([':id'=>$id]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>