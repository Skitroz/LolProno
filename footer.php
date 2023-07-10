<?php
$nameCase = 'LoLProno';
$productsCase = 'Produits';
$gameCase = 'Jeu';
$resourcesCase = 'Ressources';
$moreCase = 'Plus';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<footer>
    <section>
        <div id="footerLogoDiv">    
            <img id="footerLogo" src="images/LoLProno_logo.png" alt="LoLProno logo">
        </div>  
        <div>
            <strong><?php echo $nameCase?></strong> 
        <nav>
            <a class='footerBouton' href=""> name </a>
            <a class='footerBouton' href=""> name2 </a>
        </nav></div>
        <div>
            <strong><?php echo $productsCase?></strong> 
        <nav>
            <a class='footerBouton' href=""> products </a>
        </nav></div>
        <div>
            <strong><?php echo $gameCase?></strong> 
        <nav>
            <a class='footerBouton' href=""> game </a>
        </nav></div>
        <div>
            <strong><?php echo $resourcesCase?></strong> 
        <nav>
            <a class='footerBouton' href=""> ressources </a>
        </nav></div>
        <div>
            <strong><?php echo $moreCase?></strong>  
        <nav>
            <a class='footerBouton' href=""> more </a>
        </nav></div>
    </section>
</footer>
</body>
</html>

