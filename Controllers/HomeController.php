<?php

class HomeController {
    public function homePage(){
        require_once("../view/home.php");

    }
    public function index(){
        
    }
    public function create(){
        echo 'création';
    }
    public function update(){
        echo 'mise à jour or dié';
    }

    public function delete(){
        echo 'supprimé';
    }
}