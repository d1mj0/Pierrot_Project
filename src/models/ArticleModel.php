<?php

require_once('../src/config/Database.php'); 

class ArticleModel {

    
    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }

    // CRUD(Create, read, update, delete)


    public function create($title, $description, $text, $img){

        $request = $this->connexion->prepare('INSERT INTO article (title, description, text, img, date_time_publi) VALUES (:title, :description, :text, :img, NOW())');
        
        $request->execute([
            ':title' => $title,
            ':description' => $description,
            ':text' => $text,
            ':img' => $img,
        ]);

    
    }

    public function getAll(){
        // Read
        // cette méthode va permettre de récupérer tous les utilisateurs en base de données. 
        $request = $this->connexion->prepare('SELECT * FROM article ORDER BY date_time_publi DESC');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAll3(){
        
        $request = $this->connexion->prepare('SELECT * FROM article ORDER BY date_time_publi DESC LIMIT 3');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getOne($id){
        // Read
        // cette méthode va permettre de récupérer un seul utilisateur en base de données. 

        $request = $this->connexion->prepare('SELECT * FROM article WHERE id_article=:id');

        
        $request->execute([':id' => $id]);
        
        $result = $request->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC permet de récupérer seulement le tableau associatif

        return $result;
    }

    public function update($title, $description, $text){
        $request = $this->connexion->prepare('UPDATE article SET title=:title, description=:description, text=:text WHERE id_article=:id');
        $request->execute([
            ':title' => $title,
            ':description' => $description,
            ':text' => $text,
    ]);

        $result = $request -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // Update
        // cette méthode va permettre de modifier les données en base de données. 
    }

    public function delete($id){
        $request = $this->connexion->prepare('DELETE FROM article WHERE id_article =:id');
        $request->execute([':id' => $id]);

        $request->execute([':id' => $id]);
           
    

        $result = $request -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // Delete
        // cette méthode va permettre de supprimer les données en base de données. 
    }


}



?>