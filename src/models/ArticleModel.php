<?php
// Les models s'occupent des requêtes en base de données. 
require_once('../src/config/Database.php'); 

class ArticleModel {

    // On crée une propriété connexion qui contiendra l'objet PDO
    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }

    // CRUD(Create, read, update, delete)


    public function add($title, $desc, $text, $photo){
        // Create 
        // cette méthode va s'occuper des requêtes d'insertions en base de données. 
        $request = $this->connexion->prepare('INSERT INTO articles (title, desc, text, photo, date_enregistrement) VALUES (:title, :desc, :text, :photo, NOW())');
    
        $request->execute([
            ':title' => $title,
            ':desc' => $desc,
            ':text' => $text,
            ':photo' => $photo,
        ]);

    }

    public function getAll(){
        // Read
        // cette méthode va permettre de récupérer tous les utilisateurs en base de données. 
        $request = $this->connexion->prepare('SELECT * FROM articles');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getOne($title){
        // Read
        // cette méthode va permettre de récupérer un seul utilisateur en base de données. 

        $request = $this->connexion->prepare('SELECT * FROM articles WHERE title=:title');

        $request->execute([
            ':title' => $title
        ]);


        $result = $request->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC permet de récupérer seulement le tableau associatif

        return $result;
    }

    public function update(){
        // Update
        // cette méthode va permettre de modifier les données en base de données. 
    }

    public function delete(){
        // Delete
        // cette méthode va permettre de supprimer les données en base de données. 
    }


}



?>