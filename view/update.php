<?php
require_once ("../model/TaskModel.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $taskModel = new Tasks();
    $task = $taskModel->getTaskById($id);
    if ($task) {
        $task_text = $task['task_text'];
    } else {
        echo "Tâche non trouvée.";
        exit;
    }
} else {
    echo "ID non fourni.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Tâche</title>

</head>

<body>
    <?php include ('./partials/nav.php') ?>
    <form class="task-form" action="update_task.php" method="post">
        <h1>Modifier Tâche</h1>
        <label for="task">Tâche :</label>
        <input type="text" id="task" name="task" value="<?php echo htmlspecialchars($task_text); ?>" required>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Mettre à jour">
    </form>
</body>

</html>