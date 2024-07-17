<?php

class TaskController {
    public function homePage(){
        require_once("../view/todolist.php");

    }
    public function index(){
        require_once("../view/home.php");
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