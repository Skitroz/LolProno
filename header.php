<?php
$homeCase = 'Accueil';
$gameOfTheDayCase = 'Parties';
$gameCase = 'En jeu';
$leaderboardsCase = 'Classements';
$loginCase = 'Connexion';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<header>
    <div id="headerLogo"> <img src="images/LoLProno_logo.png" alt="LoLProno logo"> </div>     
    <nav>      
        <ul id="headerBoutonList">            
            <li>
                <a class="headerBouton" href="index.php"><?php echo $homeCase?></a>
            </li>
            <li>
                <a class="headerBouton" href="matchdujour.php"><?php echo $gameOfTheDayCase?></a>
            </li>       
            <li>
                <a class="headerBouton" href="jeu.php"><?php echo $gameCase?></a>
            </li>
            <li>
                <a class="headerBouton" href="classement.php"><?php echo $leaderboardsCase?></a>
            </li>      
            <li id="login"><a class="headerBouton" href="connexion.php"><?php echo $loginCase?></a>
        </li>
        </ul>
    </nav>
</header>
</body>
</html>

