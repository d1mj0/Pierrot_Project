<?php
    class Database{
        private $host = "localhost"; 
        private $dbname = "eversiondb2"; 
        private $username = "admin_eversion";
        private $pass = "De1ever5!0n";

        public function getPDO(){
            try{
                return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->pass);
            } catch(PDOException $error){
                exit($error);
            }
        }
    }
?>