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
        function valider($motDePasse){ //Je crée une fonction qui me permettra d'afficher le formulaire
            ?>

    <form action="" method="POST">

        <p>Entrez votre mot de passe :</p>
        <input type="text" name="MotDePasse">
        <input type="submit" value="Valider" nom="valider">



        <?php
            }
                ?>
        <?php
        valider(); //J'appelle la fonction précedente afin qu'elle soit affichée et l'inclue dans la nouvelle 
        function verification($motDePasse){ //Ici je fais une nouvelle fonction qui me permettra de vérifier si 
                                            //le mot de passe est le bon 

        $motDePasse != 123; //Je définis mon mot de passe 
        if (isset($_POST[$motDePasse])) //Cette ligne permet de vérifier si le mot de passe est 
                                        //le même que celui précedemment défini
        {
            return true; //Si oui afficher "true"  
        }
        else                //Sinon
        {
            return false;  //afficher "false"
        }
        
    }

    highlight_file(__FILE__);
    ?>
    </form>
</body>

</html>