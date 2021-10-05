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
