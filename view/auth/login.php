<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
    <?php include ('./assets/styleform.php') ?>
</head>

<body>
    <?php include ('../view/partials/nav.php')?> 
    <h1></h1>
    <form action="" method="post">
        <!-- register form : username, mail,password,confirm password -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="=password" name="password" required><br><br>
        <input type="submit" value="Register"><br>
        <span>Si vous avez déjà  encore un compte, merci de vous</span><a href="/register">Inscrire</a>  
    </form>

    <footer><?php include  ('../view/partials/nav.php') ?></footer>
</body>

</html>