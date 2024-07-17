<?php

class RegisterController {
    public function homePage(){
        require_once("../view/auth/register.php");

    }
    public function index(){
        echo "voici l'index";
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