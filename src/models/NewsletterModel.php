<?php
    require_once("../src/config/Database.php");

    class NewsletterModel{
        private $connection;
        public function __construct(){
            $database = new Database();
            $this->connexion = $database->getPDO();
        }
        public function add($name, $lastname, $email){
            $request = $this->connexion->prepare('INSERT INTO newsletter (name, lastname, email) VALUES (:name, :lastname, :email)');
            $request->execute([
                ':name'=>$name;
                ':lastname'=>$lastname;
                ':email'=>$email;
            ]);
        }
        public function getAll(){
            $request = $this->connexion->prepare('SELECT * FROM newsletter');
            $request->execute();
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getOne($email){
            $request = $this->connection->prepare('SELECT * FROM newsletter WHERE email = :email');
            $request->execute([
                ':email'=>$email;
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($name, $lastname, $email){
            $request = $this->connection->prepare('UPDATE newsletter SET email = :email WHERE name = :name AND lastname = :lastname');
            $request->execute([
                ':email'=>$email;
                ':name'=>$name;
                ':lastname'=>$lastname;
            ])
        }
        public function delete($email){
            $request = $this->connection->prepare('DELETE FROM newsletter WHERE email = :email');
            $request->execute([
                ':email'=>$email;
            ]);
            
        }
    }
?>
