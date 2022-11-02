<?php
    require '..\..\models\mdl_module.php';
    class Ctrl_Modules{
        public static function index(){
            $modules = new Mdl_Module;
            $people = $modules->get_data();
            return $people;
        } 
        
        public static function add(){
            return Mdl_Module::save_data();
        }
        public static function update(){
            return Mdl_Module::set_data();
        }
        public static function delete(){
            return Mdl_Module::delete_data();
        }
    } 
     