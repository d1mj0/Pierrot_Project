<?php
   
    require_once("../src/models/NewsletterModel.php");

        class NewsletterController{
            private $name;
            private $lastname;
            private $email;
            public function __construct($name, $lastname, $email){
                $this->setName($name);
                $this->setLastName($lastname);
                $this->setEmail($email);
            }
            public function addEmail(){
                $newsletterModel = new NewsletterModel();
                return $newsletterModel->create($this->name, $this->lastname, $this->email);
            }
            public function listEmails(){
                $newsletterModel = new NewsletterModel();
                return $newsletterModel->getAll();
            }        
            public function deleteNewsletter(){
                $newsletterModel = new NewsletterModel();
                $newsletterModel->delete($this->name, $this->lastname, $this->email);
                header('Location: b_table_newsletter.php');
                ob_end_flush();
            }
            public function updateNewsletter($id){
                $newsletterModel = new NewsletterModel();
                $newsletterModel->update($this->name, $this->lastname, $this->email, $id);
                header('Location: b_table_newsletter.php');
                ob_end_flush();
            }
    
            //setters
            public function setName($name){
                return $this->name = $name;
            }
            public function setLastName($lastname){
                return $this->lastname = $lastname;
            }
            public function setEmail($email){
                return $this->email = $email;
            }
            //getters
            public function getName(){
                return $this->name;
            }
            public function getLastName(){
                return $this->lastname;
            }
            public function getEmail(){
                return $this->email;
            }
        }
?>
    
