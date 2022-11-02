<?php
    include ('../../utils/db.php');
    
    class Mdl_contact
    {
         #maka données any anaty table
         public static function get_data(){
            $connect = db_connect()->query('SELECT * FROM contacts')->fetchAll();
            return $connect;
        }   
        
        public static  function save_data(){
            
        if(isset($_POST) && isset($_FILES['photo'])){
            $tmpName = $_FILES['photo']['tmp_name'];
            $name = $_FILES['photo']['name'];
            $size = $_FILES['photo']['size'];

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg'];
            //taille maximale
            $maxSize = 400000;

            if(in_array($extension, $extensions) && $size <= $maxSize){
            move_uploaded_file($tmpName, '../../image/'.$name);

            $insertion = db_connect()->prepare('INSERT INTO contacts (nom,prenom,fonction,email,telephone,photo) VALUES (?,?,?,?,?,?)');
            $insertion->execute([$_POST['nom'],$_POST['prenom'],$_POST['fonction'],$_POST['email'],$_POST['telephone'],$name]);
            if($insertion){
            echo "<p style='font-size:20px;margin-left:37%; font-weight:900'>Les informations saisies ont été enregistrés</p>";
            }
            }
           
            }
        }

        public static  function set_data(){
           if(isset($_POST) && isset($_FILES['photo'])){
            $tmpName = $_FILES['photo']['tmp_name'];
            $name = $_FILES['photo']['name'];
            $size = $_FILES['photo']['size'];

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg' ];
            //taille maximale
            $maxSize = 400000;

            if(in_array($extension, $extensions) && $size <= $maxSize){
                move_uploaded_file($tmpName, '../../image/'.$name);
            $cont = db_connect()->prepare('UPDATE contacts SET nom=?, prenom=?, fonction=?, email=?, telephone=?, photo=? WHERE id=?');
            if($cont->execute([$_POST['nom'],$_POST['prenom'],$_POST['fonction'],$_POST['email'],$_POST['telephone'],$name,$_POST['id']])){
                header("location: list_contact.php");
            }
            
        }
        }

            
        }

        public static  function delete_data(){
           
            if(isset($_GET['id']) && $_GET['action'] == 'delete') {
                $sqlDelete = 'DELETE FROM contacts WHERE id = '.$_GET['id'].'  ';
                if (db_connect()->query($sqlDelete)){
                    header("location: list_contact.php");
                }
            }
        }
    }
    


?>