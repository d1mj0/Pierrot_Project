<?php
    class Database{
        private $host = "localhost"; 
        private $dbname = "eversiondb2"; 
        private $username = "root";
        private $pass = "";

        public function getPDO(){
            try{
                return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->pass);
            } catch(PDOException $error){
                exit($error);
            }
        }
    }
?>