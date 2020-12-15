<?php
    include "index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     function calculMoyenne($nomDuTableau){

        $taille = count($nomDuTableau); //Ceci sert à dire que la variable $taille a pour valeur la taille du tableau 
        $somme = 0; //La somme a pour valeur de base 0
        
        for ($i = 0; $i < $taille; $i++) { //
            
            
            $somme += $nomDuTableau[$i];
        }
        $moyenne = $somme / $taille;
        return $moyenne;
     }
     
     $tab[0] = 1;
     $tab[1] = 10;
     
     echo $varMoyenne = calculMoyenne($tab);
     
     highlight_file(__FILE__);
     ?>
</body>

</html>