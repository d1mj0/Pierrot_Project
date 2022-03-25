<?php

require_once('../src/config/Database.php'); 

class PubliTextModel {

    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }

    
    
    public function create($id_publi, $title_part, $text){
        $request = $this->connexion->prepare('INSERT INTO publi_texts (id_publi, title_part, text) VALUES (:id_publi, :title_part, :text)');
        $request->execute([
            ':id_publi' => $id_publi,
            ':title_part' => $title_part,
            ':text' => $text,
            
        ]);
    }


    public function update($id_publi, $title_part, $text, $id){
        $request = $this->connexion->prepare('UPDATE publi_texts SET  title_part=:title_part, text=:text, id_publi=:id_publi, text=:text  WHERE id=:id');
        $request->execute([
            ':id_publi' => $id_publi,
            ':title_part' => $title_part,
            ':text' => $text,
            ':id' => $id,
    ]);
        $result = $request -> fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function delete($id){
        $request = $this->connexion->prepare('DELETE FROM publi_texts WHERE id=:id');
        $request->execute([':id' => $id]);
        $result = $request -> fetchAll(PDO::FETCH_ASSOC);
        header('Location: b_table_gallery.php');
        ob_end_flush();
        return $result;
    }

    

    public function getEverythingText(){
       
        $request = $this->connexion->prepare('SELECT * FROM publi_texts INNER JOIN publication  ON  publi_texts.id_publi=publication.id_publi INNER JOIN  ORDER BY  date_time_publi DESC');
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getEverythingImgList(){
       
        $request = $this->connexion->prepare('SELECT * FROM publi_texts INNER JOIN img_gallery  ON  img_gallery.id_gallery=img_serie.id_gallery INNER JOIN category ON category.id_category = img_gallery.id_category ORDER BY  date_time_publi DESC, img_serie.id_serie DESC');
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOne($id_gallery){
        $request = $this->connexion->prepare('SELECT * FROM publi_texts LEFT JOIN img_gallery ON img_serie.id_gallery=img_gallery.id_gallery LEFT JOIN category ON category.id_category=img_gallery.id_category  WHERE img_serie.id_gallery=:id_gallery');
        $request->execute([':id_gallery' => $id_gallery]);
        $result = $request->fetchAll(PDO::FETCH_ASSOC); 
        return $result;
    }

}


?>