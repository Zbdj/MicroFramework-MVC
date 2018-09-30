<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<?= $view ?>
    <form action="./index.php" method="post">

        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="submit" value="Submit">

    </form>

</body>
</html>