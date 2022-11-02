<?php

    class Mdl_prof{
        public function get_data(){
            require "..\..\utils\db.php";
            $sql = 'SELECT * FROM profs';
            $statement = db_connect()->prepare($sql);
            $statement->execute();
            $people = $statement->fetchAll(PDO::FETCH_OBJ);
            return $people;
        } 

        public function save_data(){
            require "../utils/db.php";
            require '..\views\modules\add_profs.php';
            $message = '';
            if (isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['telephone']) && isset($_POST['email']) ){
                $sql = 'INSERT INTO profs VALUES (NULL,:nom,:prenom,:cin,:telephone,:email)';
                $statement = $connection->prepare($sql);
                $statement->bindValue(':nom',$_POST['nom']);
                $statement->bindValue(':prenom',$_POST['prenom']);
                $statement->bindValue(':cin',$_POST['cin']);
                $statement->bindValue(':telephone',$_POST['telephone']);
                $statement->bindValue(':email',$_POST['email']);
                if($statement->execute()){
                    $message = 'Nice';
                }
                else{
                    $message = "Bad connexion";
                }
            }
        } 

        function set_data(){
            require "../utils/db.php";
            /*$set = 'SELECT * FROM etudiants WHERE id=:id';
            $statement = $pdo->prepare($set);
            $statement->execute([':id' => $id ]);
            $person = $statement->fetch(PDO::FETCH_OBJ);
            return $set;*/
            $id = $_GET['id'];
            $sql = 'SELECT * FROM profs WHERE id=:id';
            $statement = $connection->prepare($sql);
            $statement->execute([':id' => $id ]);
            $person = $statement->fetch(PDO::FETCH_OBJ);
            if (isset ($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['telephone']) && isset($_POST['email']) ) {
                $name = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $cin = $_POST['cin'];
                $tel = $_POST['telephone'];
                $email = $_POST['email'];
                $sql = 'UPDATE profs SET nom=:nom,prenom=:prenom,cin=:cin,telephone=:telephone,email=:email WHERE id=:id';
                $statement = $connection->prepare($sql);
                if ($statement->execute([':nom' => $name, ':prenom' => $prenom, ':cin' => $cin, ':telephone' => $tel,':email' => $email, ':id' => $id])) {
                    header("Location: ../Views/profs/list_profs.php");
                }
            }
        }

        function delete_data(){
           include '..\views\profs\profs.php';
            require "..\utils\db.php";
            $id = $_GET['id'];
            $sql = 'DELETE FROM profs WHERE id=:id';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':id' => $id])) {
                header("Location: http://localhost/projet%20Examen/views/profs/list_profs.php");
            }
        }
    }
    