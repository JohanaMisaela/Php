<?php require ('db.php')?>


<?php
        function getNameInDatabase($a){
            db_connect();
            $request = 'SELECT nom FROM contacts WHERE id='.$a.'';
            $resultat= db_connect()->query($request)->fetch();
            $nom = $resultat['nom'];
            echo $nom;
            
        }
        
        function getFirstNameInDatabase($a){
            db_connect();
            $request = 'SELECT prenom FROM contacts WHERE id='.$a.'';
            $resultat= db_connect()->query($request)->fetch();
            $prenom = $resultat['prenom'];
            echo $prenom;
            
        }
        
        function getMailInDatabase($a){
            db_connect();
            $request = 'SELECT email FROM contacts WHERE id='.$a.'';
            $resultat= db_connect()->query($request)->fetch();
            $email = $resultat['email'];
            echo $email;
            
        }
        
        function getTelephoneInDatabase($a){
            db_connect();
            $request = 'SELECT telephone FROM contacts WHERE id='.$a.'';
            $resultat= db_connect()->query($request)->fetch();
            $telephone= $resultat['telephone'];
            echo $telephone;
            
        }
        
        function getFunctionInDatabase($a){
            db_connect();
            $request = 'SELECT fonction FROM contacts WHERE id='.$a.'';
            $resultat= db_connect()->query($request)->fetch();
            $fonction = $resultat['fonction'];
            echo $fonction;
            
        }
        

?>