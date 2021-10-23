<?php
    class Database{
        private $host = "localhost"; 
        private $dbname = "delevers10n4dm1n"; 
        private $username = "delevers10n4dm1n";
        private $pass = "sUp3Rtr0b1eN";

        public function getPDO(){
            try{
                return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->pass);
            } catch(PDOException $error){
                exit($error);
            }
        }
    }
?>