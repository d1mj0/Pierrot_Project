<?php
session_start(); 



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
        var_dump($data[0],'1');
        if(count($data) === 1){
            var_dump($data[0],'2');
            // password_verify() permet de faire correspondre un mot de passe et mot de passe hashé.
                
                // La variable prédéfinie $_SESSION permet de persister les données de page en page.
                // Il ne faut surtout pas oublier session_start() en début de fichier. 
                $_SESSION['user'] = [
                    'email' => $data[0]['email'],
                    'rank' => $data[0]['rank'],
                ];var_dump($data[0]);
                if($data[0]['rank'] == "admin"){
                    
                    header('Location: b_administration.php');
                }
                
            
            }
        }
    

    
    public function inscription(){
        if(count($this->checkMail($this->mail)) === 0){
            if(isset($this->password) && isset($this->email) && isset($this->rank)){
                $userModel = new UserModel();
                $userModel->add($this->password,  $this->email, $this->rank);
                header('Location: index.php');

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
        
        if(strlen($password) > 4){
            
            /*if(isset($this->email)){
                $password = password_hash($password, PASSWORD_BCRYPT); // password_hash permet de hasher un mot de passe. 
            }*/
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