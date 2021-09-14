<?php
// Les models s'occupent des requêtes en base de données. 
require_once('../src/config/Database.php'); 

class UserModel {

    // On crée une propriété connexion qui contiendra l'objet PDO
    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }

    // CRUD(Create, read, update, delete)


    public function add($pseudo, $pass, $name, $firstname, $mail, $civility, $rank){
        // Create 
        // cette méthode va s'occuper des requêtes d'insertions en base de données. 
        $request = $this->connexion->prepare('INSERT INTO membre (pseudo, pass, name, firstname, mail, civility, rank, date_enregistrement) VALUES (:pseudo, :pass, :name, :firstname, :mail, :civility, :rank,  NOW())');
    
        $request->execute([
            ':pseudo' => $pseudo,
            ':pass' => $pass,
            ':name' => $name,
            ':firstname' => $firstname,
            ':mail' => $mail,
            ':civility' => $civility,
            ':rank' => $rank
        ]);

    }

    public function getAll(){
        // Read
        // cette méthode va permettre de récupérer tous les utilisateurs en base de données. 
        $request = $this->connexion->prepare('SELECT * FROM membre');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getOne($mail){
        // Read
        // cette méthode va permettre de récupérer un seul utilisateur en base de données. 

        $request = $this->connexion->prepare('SELECT * FROM membre WHERE mail=:mail');

        $request->execute([
            ':mail' => $mail
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