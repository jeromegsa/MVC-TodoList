<?php
//username, mail,password,confirm password
require_once '../model/UserModel.php';
$username = htmlspecialchars($_POST["username"]) ;
$password =htmlspecialchars($_POST["password"]) ;
$email = htmlspecialchars($_POST["email"]) ;
$password_confirm = htmlspecialchars( $_POST["confirmPassword"]);
$btn = $_POST["btn"];
print_r($_POST);
if (isset($btn) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if($password===$password_confirm  && filter_var( $email, FILTER_VALIDATE_EMAIL )) {
        $user = new Users();
        $password=password_hash($password_confirm, PASSWORD_DEFAULT);
        $data = [$username, $password, $email];
        $user->createUser( $data);
    }else{
        echo 'Les mots de passe ne sont pas conformes ou mail incorrecte';
    }
   
}else{
    echo 'Une erreur s\'est produite !';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include ('./assets/styleform.php') ?>
</head>

<body>
    <nav><?php include ('../view/partials/nav.php') ?></nav>
    <form action="/register" method="post">
        <!-- register form : username, mail,password,confirm password -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
        <input type="submit" value="Register" name="btn"> <br>
        <input type="reset" value="Annuler"> <br>
        <span>Si vous avez déjà un compte, merci de vous </span><a href="/login">Connecter</a>
    </form>

    <footer><?php include ('../view/partials/footer.php') ?></footer>
</body>

</html>