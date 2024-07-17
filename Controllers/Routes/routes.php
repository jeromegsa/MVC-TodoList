<?php
require_once ('../Controllers/RegisterUserController.php');
require_once ('../Controllers/TaskController.php');
require_once ('../Controllers/UserController.php');
require_once ('../Controllers/HomeController.php');


$route = $_SERVER["REQUEST_URI"];
$route = substr($route, 1);
$route = explode('-', $route); // On prend le lien qu'on divise selon un tiret pour recuperer le controller et la route 
$controller = $route[0]; //on recupère le controller dans une vair
$action = $route[1]?? "home";
var_dump($route);

if (isset($controller)) {
    switch ($controller) {
        case "":
            $ControllerInstance=new HomeController();
            
            break;
        case 'task':
            //appelle du controlle de tache lorqu'on a dans le lien ``task-action``
            $ControllerInstance = new TaskController();
            break;
        case 'login':
            $ControllerInstance = new UserController();
          
            break;
        case 'register':
            $ControllerInstance = new RegisterController();
            break;

        // case '/update':
        //     if (isset($_GET['id'])) {
        //         $id = $_GET['id'];
        //         require_once '../view/update.php';
        //     } else {
        //         echo "ID non fourni.";
        //     }
        //     break;
        default:
            require_once '';
    }
} else {
    echo 'Une erreur s\'est produite !';
}

switch ($action) {
    case 'home':
        $ControllerInstance->homePage();
        break;
    case 'create':
        $ControllerInstance->create();
        break;
    case 'update':
        $ControllerInstance->update();
        break;
    case 'delete':
        $ControllerInstance->delete();
    default:
        # code...
        break;
}


