<?php 
include ("header.php");

$servername="root";
$username = "lolprono";
$password = "";
$dbname = "lolprono";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname, $username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données. Erreur : " . $e->getMessage();
}

if(isset($_POST['submit']))
{
    $pseudoRegister = $_POST['pseudoRegister'];
    $passwordRegister = $_POST['passwordRegister'];
    $teamRegister = $_POST['teamRegister'];
    $dateRegister = date('d-m-Y');

    $sql = ("INSERT INTO `utilisateur`(`pseudo`,`password`,`team`,`creatingDate`) VALUES(:pseudoRegister, :passwordRegister, :teamRegister, :dateRegister)");
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoL Prono - Création de compte</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/register.css">

</head>

<body>

    <br> <br>
    <form method="POST" action="index.php">
        <label for="pseudo">Votre pseudo:</label>
        <input type="text" id="pseudo" name="pseudoRegister" required>
    <br> <br>
        <label for="password">Votre mot de passe:</label>
        <input type="text" id="password" name="passwordRegister" required>
    <br> <br>
        <label for="team">Votre équipe:</label>
        <select name="teamRegister" id="team" >
            <option value="" selected disabled></option>
            <option value="G2">G2 Esport</option>
        </select>
    <br> <br>
        <input type="submit" value="Créer mon compte" name="submit">
    </form>

</body>
</html>

<?php 
include ("footer.php");
?> 