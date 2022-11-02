<?php
    require '..\..\models\mdl_prof.php';
    class Ctrl_Profs{
        public static function index(){
            $profs = new Mdl_Prof;
            $people = $profs->get_data();
            return $people;
        } 
        
        public static function add(){
            return Mdl_Prof::save_data();
        }
        public static function update(){
            return Mdl_Prof::set_data();
        }
        public static function delete(){
            return Mdl_Prof::delete_data();
        }
    } 
     