<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Tâche</title>
        <!-- <?php include ('./assets/styleTask.php') ?> -->
    <?php include ('./assets/styleform.php') ?>
</head>

<body>
    <div class="container">
    <?php include ('../view/partials/nav.php') ?>
        <form class="task-form" action="" method="post">
            <h1>Créer une Tâche</h1>
            <label for="task">Tâche :</label>
            <input type="text" id="task" name="task" required>
            <input type="submit" value="Ajouter" name="btn">
        </form>

        <div class="task-list">
            <h1>Liste des Tâches</h1>
            <ul>
                <?php
                include ('../model/TaskModel.php');
                $task = new Tasks();
                $tasks = $task->getTasks();

                foreach ($tasks as $task) {
                    $task_bdd = htmlspecialchars($task['task_text']);
                    $id = $task['id'];
                    echo "<li><span class='task-text'>$task_bdd</span> <a class='edit-link' href='/update?id=$id'>Modifier</a> <a class='edit-link' href='#'>Supprimer</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>

<?php
//username, mail,password,confirm password
require_once '../model/TaskModel.php';



print_r($_POST);
if (isset($_POST["btn"]) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $task_fournie = htmlspecialchars($_POST["task"]);
    $task = new Tasks();
    $data = [$task_fournie];
    $task->createTask($data);
} else {
    echo 'Une erreur s\'est produite !';
}

// Afffichage 


?>