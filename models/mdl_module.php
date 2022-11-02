<?php

    class Mdl_module{
        public function get_data(){
            require "..\..\utils\db.php";
            $sql = 'SELECT * FROM modules';
            $statement = db_connect()->prepare($sql);
            $statement->execute();
            $people = $statement->fetchAll(PDO::FETCH_OBJ);
            return $people;
        } 

        public function save_data(){
            require "../utils/db.php";
            require '..\views\modules\add_modules.php';
            $message = '';
            if (isset ($_POST['nom']) && isset($_POST['code']) && isset($_POST['credit'])&& isset($_POST['heure']) ){
                $sql = 'INSERT INTO profs VALUES (NULL,:nom,:code,:credit,:heure)';
                $statement = $connection->prepare($sql);
                $statement->bindValue(':nom',$_POST['nom']);
                $statement->bindValue(':code',$_POST['code']);
                $statement->bindValue(':credit',$_POST['credit']);
                $statement->bindValue(':heure',$_POST['heure']);
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
            $sql = 'SELECT * FROM modules WHERE id=:id';
            $statement = $connection->prepare($sql);
            $statement->execute([':id' => $id ]);
            $person = $statement->fetch(PDO::FETCH_OBJ);
            if (isset ($_POST['nom'])  && isset($_POST['code']) && isset($_POST['credit']) && isset($_POST['heure'])) {
                $name = $_POST['nom'];
                $code = $_POST['code'];
                $credit = $_POST['credit'];
                $heure = $_POST['heure'];
                $sql = 'UPDATE modules SET nom=:nom,code=:code,credit=:credit,heure=:heure WHERE id=:id';
                $statement = $connection->prepare($sql);
                if ($statement->execute([':nom' => $name, ':code' => $code, ':credit' => $credit, ':heure' => $heure, ':id' => $id])) {
                    header("Location: ../Views/modules/list_modules.php");
                }
            }
        }

        function delete_data(){
            include '../views/etudiants/list_modules.php';
            require "../utils/db.php";
            $id = $_GET['id'];
            $sql = 'DELETE FROM modules WHERE id=:id';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':id' => $id])) {
                header("Location: http://localhost/projet%20Examen/views/etudiants/list_modules.php");
            }
        }
    }
    