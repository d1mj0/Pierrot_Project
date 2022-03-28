<?php

require_once('../src/config/Database.php'); 

class UserModel {
    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }


    public function add($email, $password, $rank){
        $request = $this->connexion->prepare('INSERT INTO member (email, password, rank) VALUES (:email, :password, :rank)');
        $request->execute([
            ':email' => $email,
            ':password' => $password,  
            ':rank' => $rank
        ]);

    }


    public function getOne($email){
        $request = $this->connexion->prepare('SELECT * FROM member WHERE email=:email');
        $request->execute([
            ':email' => $email
        ]);
        $result = $request->fetchAll(PDO::FETCH_ASSOC); 
        return $result;
    }


}
?>