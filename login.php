<?php 
include ("header.php");
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoL Prono - Connexion</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <br> <br>
    <form method="POST" action="index.php">
        <label for="pseudo">Votre pseudo:</label>
        <input type="text" id="pseudo" name="pseudoLogin" required>
    <br> <br>
        <label for="password">Votre mot de passe:</label>
        <input type="text" id="password" name="passwordLogin" required>
    <br> <br>
        <input type="submit" value="Se connecter" name="submit">
    </form>
    <br> 
    <a class="registerBouton" href="register.php">Créer un compte</a>


</body>
</html>

<?php 
include ("footer.php");
?> 