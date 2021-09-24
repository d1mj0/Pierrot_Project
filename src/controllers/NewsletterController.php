<?php
    session_start();
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
        public function listEmails(){
            $newsletterModel = new NewsletterModel();
            return $newsletterModel->getAll();
        }
        public function addEmail(){
            $newsletterModel = new NewsletterModel();
            return $newsletterModel->add($name, $lastname, $email);
        }
        public function deleteEmail(){
            $newsletterModel = new NewsletterModel();
            return $newsletterModel->delete($email);
        }
        public function updateEmail(){
            $newsletterModel = new NewsletterModel();
            return $newsletterModel->update($name, $lastname, $email);
        }
        //setters
        public function setName($name){
            return $this->$name = $name;
        }
        public function setLastName($lastname){
            return $this->$lastname = $lastname;
        }
        public function setEmail($email){
            return $this->$email = $email;
        }
        //getters
        public function getName(){
            return $this->$name;
        }
        public function getLastName(){
            return $this->$lastname;
        }
        public function getEmail(){
            return $this->$email;
        }
    }
?>
