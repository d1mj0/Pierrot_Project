<?php

class Database{

    private $host = "localhost"; // On peut préciser 127.0.0.1 qui est un équivalent de localhost.

    private $dbname = "projet"; 

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