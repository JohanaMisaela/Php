<?php
    include ('../../models/mdl_contact.php');
    
    class Ctrl_Contacts{
        #eto misy attributs bdb izay anaran'ny colonne anaty Table
        
        
        
        
        
        # afficher liste
        public function index(){
            $c = new Mdl_contact();
            $data_contact = $c :: get_data();
            return $data_contact;
            
        }   
       # afficher formulaire d'ajout 
        function add(){
            require('views/contacts/formulaire_ajout.php');
        }
        # sauvegarder l'ajout
        function save(){
            
            $c = new Mdl_contact();
            $save = $c :: save_data();            
            return $this;

        }
        # pour sauvegarder le formulaire de modification
        function update(){
            $u = new Mdl_contact();
            $object_contact = new Ctrl_Contacts();
            $u :: set_data();
            return $this;
        }
        # pour supprimer un élément
        function delete(){
            $d = new Mdl_contact();
            $object_contact = new Ctrl_Contacts();
            $d :: delete_data();
            return $this;
        }
    }
    
   # $object_contact = new Ctrl_Contacts();
    #$liste_contact = $object_contact -> index();
        
       #$ajout_form = $object_contact -> add();
       #$save_ajout = $object_contact -> save();

        #$suppr = $object_contact -> delete()
        #$modif = $object_contact -> update();
    ?>


 
    
        
        

     

