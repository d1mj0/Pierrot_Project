<?php
session_start(); // session_start permet de créer la session ou d'en récupérer une déjà existante. 

// Les controllers s'occupent du traitement des données. 

// require_once('../src/config/Database.php'); // Attention aux chemins relatifs. Ici Database est appelée depuis inscription.php.
require_once('../src/models/UserModel.php');

// Il faut sécuriser les données dans deux cas :
// - Les fautes de frappes 
// - Les failles de sécurité (faille XSS)

class UserController {

    private $pseudo;

    private $pass;

    private $name;

    private $firstname;

    private $mail;

    
    private $civility;

    private $rank;

    public function __construct($pseudo, $pass, $name, $firstname, $mail, $civility, $rank){
        $this->setPseudo($pseudo);
        $this->setPass($pass);
        $this->setFirstname($name);
        $this->setName($firstname);
        $this->setMail($mail);
        $this->setCivility($civility);
        $this->setRank($rank);
    }

    public function inscription(){
        if(count($this->checkMail($this->mail)) === 0){
            if(isset($this->pseudo) && isset($this->pass) && isset($this->name) && isset($this->firstname)  && isset($this->mail)  && isset($this->civility) && isset($this->rank)){
                $userModel = new UserModel();
                $userModel->add($this->pseudo,  $this->pass, $this->name, $this->firstname, $this->mail,  $this->civility, $this->rank);
                header('Location: index.php');

            }
        }
    }

    public function login(){
        $data = $this->checkMail($this->mail);
        if(count($data) === 1){
            if(password_verify($this->pass, $data[0]['pass'])){ // password_verify() permet de faire correspondre un mot de passe et mot de passe hashé.
                
                // La variable prédéfinie $_SESSION permet de persister les données de page en page.
                // Il ne faut surtout pas oublier session_start() en début de fichier. 
                $_SESSION['user'] = [
                    
                    'pseudo' => $data[0]['pseudo'],
                    'firstname' => $data[0]['name'],
                    'name' => $data[0]['firstname'],
                    'mail' => $data[0]['mail'],
                    'civility' => $data[0]['civility'],
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

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        return $this->pseudo = $pseudo;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        // hasher un mot de passe, permet de le sécuriser. 
        // strlen() permet de connaitre le nombre de caractères d'une chaine. 
        if(strlen($pass) > 5){
            // On vérifie si firstname et name sont non-null pour hashé le mot de passe
            // Cela permet de différencier la connexion et l'inscription. 
            if(isset($this->firstname) && isset($this->name)){
                $pass = password_hash($pass, PASSWORD_BCRYPT); // password_hash permet de hasher un mot de passe. 
            }
            return $this->pass = $pass;
        }
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        // preg_match va permettre d'intercepter les chevrons "<" pour répondre à la faille XSS. 
        if(preg_match('/^[a-zA-Z-çéèàâêô]+$/', $name)){
            return $this->name = $name;
        }
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstname){
        // preg_match fait correspondre une regex (expression régulière) et une chaine de caractères
        // Si la chaine de caractères comprend un élément qui ne se trouve pas dans la regex alors preg_match retourne FALSE.
        // Ici la regex prend en compte : les minuscules, les majuscules, les traits d'unions, " ç é è à â ê ô "
        if(preg_match('/^[a-zA-Z-çéèàâêô]+$/', $firstname)){
            return $this->firstname = $firstname;
        }
    }

    


    public function getMail(){  
        return $this->mail;
    }

    public function setMail($mail){
        // filter_var permet de vérifier ou de nettoyer pas mal d'éléments en PHP. 
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            return $this->mail = $mail;
        }
    }

    

    public function getCivility(){
        return $this->civility;
    }

    public function setCivility($civility){
        return $this->civility = $civility;
    }

    public function getRank(){
        return $this->rank;
    }

    public function setRank($rank){
        return $this->rank = $rank;
    }

}







?>