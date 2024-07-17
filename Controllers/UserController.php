<?php

class UserController {
    public function homePage(){
        require '../view/auth/login.php';

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