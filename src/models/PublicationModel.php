<?php
    require_once("../src/config/Database.php");

    class PublicationModel{
        private $connexion;
        public function __construct(){
            $database = new Database();
            $this->connexion = $database->getPDO();
        }
        public function create($title, $description, $img){
            $request = $this->connexion->prepare('INSERT INTO `publication`(`title`, `description`, `img`) VALUES (:title, :description, :img)');
            $request->execute([
                ':title'=>$title,
                ':description'=>$description,
                ':img'=>$img
            ]);
        }
        public function getAll(){
            $request = $this->connexion->prepare('SELECT publication.title, publication.description, publication.img, publi_texts.id_publi, publi_texts.title_part, publi_texts.text FROM publication  INNER JOIN publi_texts ON publi_texts.id_publi=publication.id_publi');
            $request->execute();
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getOne($id_publi){
            $request = $this->connexion->prepare('SELECT publication.id_publi, publication.title, publication.description, publication.img, publi_texts.id_publi, publi_texts.title_part, publi_texts.text FROM publication  INNER JOIN publi_texts ON publi_texts.id_publi=publication.id_publi WHERE publication.id_publi=:id_publi');
            $request->execute([':id_publi'=>$id_publi]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($title, $description, $img, $id){
            $request = $this->connexion->prepare('UPDATE `publication` SET `title`=:title, `description`=:description, `text`=:text, `img`=:img WHERE `id`=:id');
            $request->execute([
                ':title'=>$title,
                ':description'=>$description,
                ':img'=>$img,
                ':id'=>$id
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function delete($id){
            $request = $this->connexion->prepare('DELETE FROM `publication` WHERE `id_publi`=:id');
            $request->execute([':id'=>$id]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            header('Location: b_table_publication.php');
            ob_end_flush();
            return $result;
        }
        //fetch all publications by date in descending order
        public function displayChronoDesc(){
            $request = $this->connexion->prepare('SELECT * FROM `publication` ORDER BY `date_time_publi` DESC LIMIT 4');
            $request->execute();
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>