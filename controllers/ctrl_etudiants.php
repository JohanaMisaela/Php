<?php
    require '..\..\models\mdl_etudiant.php';
    class Ctrl_Etudiants{
        public static function index(){
            $etudiants = new Mdl_Etudiant;
            $people = $etudiants->get_data();
            return $people;
        } 
        
        public static function add(){
            return Mdl_Etudiant::save_data();
        }
        public static function update(){
            return Mdl_Etudiant::set_data();
        }
        public static function delete(){
            return Mdl_Etudiant::delete_data();
        }
    } 
     