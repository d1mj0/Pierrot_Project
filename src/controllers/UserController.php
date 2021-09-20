<?php
session_start(); // session_start permet de créer la session ou d'en récupérer une déjà existante. 

// Les controllers s'occupent du traitement des données. 

// require_once('../src/config/Database.php'); // Attention aux chemins relatifs. Ici Database est appelée depuis inscription.php.
require_once('../src/models/UserModel.php');

// Il faut sécuriser les données dans deux cas :
// - Les fautes de frappes 
// - Les failles de sécurité (faille XSS)

class UserController {

    private $mail;

    private $pass;

        
    private $rank;

    public function __construct($Email, $Password, $rank){
        $this->setMail($Email);
        $this->setPass($Password);
        $this->setRank($rank);
    }

    
    public function login(){
        $data = $this->checkMail($this->Email);
        if(count($data) === 1){
            if(password_verify($this->Password, $data[0]['Password'])){ // password_verify() permet de faire correspondre un mot de passe et mot de passe hashé.
                
                // La variable prédéfinie $_SESSION permet de persister les données de page en page.
                // Il ne faut surtout pas oublier session_start() en début de fichier. 
                $_SESSION['user'] = [
                    'Email' => $data[0]['Email'],
                    'rank' => $data[0]['rank'],
                ];
                if($data[0]['rank'] == "admin"){
                    header('Location: user_administration.php');
                }
                
            
            }
        }
    }

    

    public function listUsers(){
        $userModel = new UserModel();
        return $userModel->getAll();
    }

    public function checkMail($mail){
        $userModel = new UserModel();
        return $userModel->getOne($mail);
    }

    ////////////////////////////////////
    // Encapsulation : getter / setter
    ////////////////////////////////////

    // On pourrait sécuriser chaque champ plus en détails. 


    public function getPass(){
        return $this->pass;
    }

    public function setPass($Password){
        // hasher un mot de passe, permet de le sécuriser. 
        // strlen() permet de connaitre le nombre de caractères d'une chaine. 
        if(strlen($Password) > 5){
            // On vérifie si firstname et name sont non-null pour hashé le mot de passe
            // Cela permet de différencier la connexion et l'inscription. 
            if(isset($this->firstname) && isset($this->name)){
                $Password = password_hash($Password, PASSWORD_BCRYPT); // password_hash permet de hasher un mot de passe. 
            }
            return $this->Password = $Password;
        }
    }

   


    public function getMail(){  
        return $this->mail;
    }

    public function setMail($Email){
        // filter_var permet de vérifier ou de nettoyer pas mal d'éléments en PHP. 
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            return $this->Email = $Email;
        }
    }

    

    public function getRank(){
        return $this->rank;
    }

    public function setRank($rank){
        return $this->rank = $rank;
    }

}







?>