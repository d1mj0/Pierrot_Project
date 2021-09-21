<?php
session_start(); // session_start permet de créer la session ou d'en récupérer une déjà existante. 

// Les controllers s'occupent du traitement des données. 

// require_once('../src/config/Database.php'); // Attention aux chemins relatifs. Ici Database est appelée depuis inscription.php.
require_once('../src/models/UserModel.php');

// Il faut sécuriser les données dans deux cas :
// - Les fautes de frappes 
// - Les failles de sécurité (faille XSS)

class UserController {

    private $email;

    private $password;

    private $rank;

    public function __construct($email, $password, $rank){
        $this->setMail($email);
        $this->setPass($password);
        $this->setRank($rank);
    }

    
    public function login(){
        $data = $this->checkMail($this->email);
        if(count($data) === 1){
            if(password_verify($this->password, $data[0]['password'])){ // password_verify() permet de faire correspondre un mot de passe et mot de passe hashé.
                
                // La variable prédéfinie $_SESSION permet de persister les données de page en page.
                // Il ne faut surtout pas oublier session_start() en début de fichier. 
                $_SESSION['user'] = [
                    'email' => $data[0]['email'],
                    'rank' => $data[0]['rank'],
                ];
                if($data[0]['rank'] == "admin"){
                    header('Location: blog_administration.php');
                }
                
            
            }
        }
    }

    


    public function checkMail($email){
        $userModel = new UserModel();
        return $userModel->getOne($email);
    }



    ////////////////////////////////////
    // Encapsulation : getter / setter
    ////////////////////////////////////

    // On pourrait sécuriser chaque champ plus en détails.


    public function getMail(){  
        return $this->email;
    }

    public function setMail($email){
        // filter_var permet de vérifier ou de nettoyer pas mal d'éléments en PHP. 
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return $this->email = $email;
        }
    }

    public function getPass(){
        return $this->password;
    }

    public function setPass($password){
        // hasher un mot de passe, permet de le sécuriser. 
        // strlen() permet de connaitre le nombre de caractères d'une chaine. 
        if(strlen($password) > 5){
            // On vérifie si firstname et name sont non-null pour hashé le mot de passe
            // Cela permet de différencier la connexion et l'inscription. 
            if(isset($this->email)){
                $password = password_hash($password, PASSWORD_BCRYPT); // password_hash permet de hasher un mot de passe. 
            }
            return $this->password = $password;
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