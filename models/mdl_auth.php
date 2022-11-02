<?php
    require('../../utils/db.php');

    class Mdl_auth{
        
        
        #maka données any anaty table
        public static function get_data(){
            $connect = db_connect()->query('SELECT * FROM Authentification')->fetchAll();
            return $connect;
           
        }   
        
        public static  function save_dataEtudiant(){
            
            if($_POST){
            $insertSql = 'INSERT INTO etudiants(nom,prenom,age,cin,niveau,email,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'",'.$_POST['age'].','.$_POST['cin'].',"'.$_POST['niveau'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['password_retype'].'")';
            if(db_connect()->query($insertSql)){
                echo"<script>alert(\"  Votre compte a été créé\")</script>";   
            }
            }
        }
        
        
        
        public static  function save_dataProf(){
            
            if($_POST){
            @$insertSql = 'INSERT INTO profs(nom,prenom,cin,matiere,niveau,email,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'",'.$_POST['cin'].',"'.$_POST['matière'].'","'.$_POST['niveau'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['password_retype'].'")';
            if(db_connect()->query($insertSql)){
                echo"<script>alert(\"  Votre compte a été créé\")</script>";   
            }
            
            #header ("location: views/acceuil/main.php");

            
            }
        }

        public static  function save_dataAdmin(){
            
            if($_POST){
            $insertSql = 'INSERT INTO authentification(nom,prenom,cin,telephone,email,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'",'.$_POST['cin'].',"'.$_POST['telephone'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['password_retype'].'")';
            if(db_connect()->query($insertSql)){
                echo"<script>alert(\"  Votre compte a été créé\")</script>";   
            }
            }
        }




        public static function verifyEtudiant(){
            if($_POST){
                extract($_POST);
                if(!empty($email) && !empty($password)){
            $q = db_connect()->prepare("SELECT * FROM etudiants WHERE email=?");
            $q -> execute([$email]);
            $resultat=$q ->fetch();
            if($resultat == FALSE){
                echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier le mail saisi puis ressayer\")</script>";
              }else{
                if($password == $resultat['password']){
                    header("location: ../../accueilEtudiant.php");
                }else{
                    echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ressayer\")</script>";
                }
              }
        }
    }
}





        public static function verifyProf(){
            if($_POST){
                extract($_POST);
                if(!empty($email) && !empty($password)){
            $q = db_connect()->prepare("SELECT * FROM profs WHERE email=?");
            $q -> execute([$email]);
            $resultat=$q ->fetch();
            if($resultat == FALSE){
                echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier le mail saisi puis ressayer\")</script>";
              }else{
                if($password == $resultat['password']){
                    header("location: ../../accueilProf.php");
                }else{
                    echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ressayer\")</script>";
                }
              }
        }
    }
}




public static function verifyAdmin(){
    if($_POST){
        extract($_POST);
        if(!empty($email) && !empty($password)){
    $q = db_connect()->prepare("SELECT * FROM authentification WHERE email=?");
    $q -> execute([$email]);
    $resultat=$q ->fetch();
    if($resultat == FALSE){
        echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier le mail saisi puis ressayer\")</script>";
      }else{
        if($password == $resultat['password']){
            header("location: ../../main.php");
        }else{
            echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ressayer\")</script>";
        }
      }
}
}
}
}
?>