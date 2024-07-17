<?php

require_once "../model/Database.php";
class Tasks extends Database
{
    function createTask($data)
    {
        $sql = 'INSERT INTO tasks(task_text) Values (?)';
        $user = parent::setData($sql, $data);
    }

    public function getTasks()
    {
        $sql = "SELECT * FROM tasks";
        $tasks = parent::getManyData($sql);
       
       
        return $tasks;
    }

    public function getTaskById($id)
    {
        $sql = "SELECT * FROM tasks WHERE id = ?";
        return $this->getOneData([$id], $sql);
    }

    public function updateTask($id, $task_text)
    {
        $sql = "UPDATE tasks SET task_text = ? WHERE id = ?";
        return $this->setData($sql, [$task_text, $id]);
    }
}



