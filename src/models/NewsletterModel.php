<?php
    require_once("../src/config/Database.php");

    class NewsletterModel{
        private $connexion;
        public function __construct(){
            $database = new Database();
            $this->connexion = $database->getPDO();
        }
        public function create($name, $lastname, $email){

            $request = $this->connexion->prepare('INSERT INTO newsletter (name, lastname, email) VALUES (:name, :lastname, :email)');

            $request->execute([
                ':name'=>$name,
                ':lastname'=>$lastname,
                ':email'=>$email,
            ]);
        }
        public function getAll(){
            $request = $this->connexion->prepare('SELECT * FROM newsletter ORDER BY name ');
            $request->execute();
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getOne($id){
            $request = $this->connexion->prepare('SELECT * FROM newsletter WHERE id_request = :id');
            $request->execute([
                ':id'=>$id,
            ]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($name, $lastname, $email, $id){
            $request = $this->connexion->prepare('UPDATE newsletter SET email = :email, name = :name, lastname = :lastname WHERE id_request=:id');
            $request->execute([
                ':email'=>$email,
                ':name'=>$name,
                ':lastname'=>$lastname,
                ':id'=>$id
            ]);
        }
        public function delete($id){
            $request = $this->connexion->prepare('DELETE FROM newsletter WHERE id_request = :id');
            $request->execute([':id'=>$id]);
            $result = $request->fetchAll(PDO::FETCH_ASSOC);
            header('Location: b_table_newsletter.php');
            ob_flush_end();
            return $result;
        }
    }
?>
