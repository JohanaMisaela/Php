<?php
// session_start();
// $_SESSION['pseudo'] = $_POST['pseudo'];
  include ('../../models/mdl_auth.php');
 
  

    class Ctrl_Auths{
      #eto misy attributs bdb izay anaran'ny colonne anaty Table
        
        
      
      
        function saveEtudiant(){
          
        #  require("../views/auths/inscription.php");
            $nom = filter_input(INPUT_POST, 'nom');
            $prenom = filter_input(INPUT_POST, 'prenom');
            $age = filter_input(INPUT_POST, 'age');
            $cin = filter_input(INPUT_POST, 'cin');
            $niveau = filter_input(INPUT_POST, 'niveau');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $password_retype = filter_input(INPUT_POST, 'password_retype');
            
            
                      if($password == $password_retype){
            if($email){
              $a = new Mdl_auth();
             $save = $a ::save_dataEtudiant();
             
             #header("Location:connexion.php");
            }
            
          }else{echo"<script>alert(\" Veuillez à bien confirmer votre mot de passe\")</script>";}
        
        }

        function saveAdmin(){
          
          #  require("../views/auths/inscription.php");
              $nom = filter_input(INPUT_POST, 'nom');
              $prenom = filter_input(INPUT_POST, 'prenom');
              $cin = filter_input(INPUT_POST, 'cin');
              $telephone = filter_input(INPUT_POST, 'telephone');
              $email = filter_input(INPUT_POST, 'email');
              $password = filter_input(INPUT_POST, 'password');
              $password_retype = filter_input(INPUT_POST, 'password_retype');
              
              
                        if($password == $password_retype){
              if($email){
                $a = new Mdl_auth();
               $save = $a ::save_dataAdmin();
               
              }
              
            }else{echo"<script>alert(\" Veuillez à bien confirmer votre mot de passe\")</script>";}
          
          }

        
        function saveProf(){
          
          #  require("../views/auths/inscription.php");
              $pseudo = filter_input(INPUT_POST, 'pseudo');
              $email = filter_input(INPUT_POST, 'email');
              $password = filter_input(INPUT_POST, 'password');
              $password_retype = filter_input(INPUT_POST, 'password_retype');
              
              
                        if($password == $password_retype){
              if($email){
                $a = new Mdl_auth();
               $save = $a ::save_dataProf();
               
               #header("Location:connexion.php");
              }
              
            }else{echo"<script>alert(\" Veuillez à bien confirmer votre mot de passe\")</script>";}
          
          }




        function loginEtudiant(){
              $a = new Mdl_auth();
               $login = $a :: verifyEtudiant();
             }
        
        function loginProf(){
          
              $a = new Mdl_auth();
              $login = $a :: verifyProf();
              
              
            }
            function loginAdmin(){
          
              $a = new Mdl_auth();
              $login = $a :: verifyAdmin();
              
              
            }


          }



    $object_auths = new Ctrl_Auths();
    #$save_ajout = $object_auths -> login();
    

?>