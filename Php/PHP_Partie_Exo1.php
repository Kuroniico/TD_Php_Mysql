<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="StylePHP.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StylePHP.css">
    <title>Nombre Aléatoire</title>
</head>
<body>
    <center>
    <?php
    $Nombrealeatoire = rand (0,100);
        if ($Nombrealeatoire%2==1){
            echo '<div class="paire">'.$Nombrealeatoire.' est pair</div> ';
                }
                else
            {
            echo'<div class="impaire">'.$Nombrealeatoire.' est impair</div>';
                
            }
                
?>
    </center>
</body>
</html>