<?php
    include "index.php";
?>

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
    <?php
    tableau(); //J'appelle la fonction 
?>
    <?php function tableau(){ //Je crée une fonction contenant mon tableau
    
    ?>

    <table>
        <tr>
            <td></td>
            <td>1er semestre</td>
            <td>2ème semestre</td>
        </tr>
        <tr>
            <td rowspan='3'>ST01</td>
            <td>SI1, SI2, SI3, SI4</td>
            <td>SI5, SI6</td>
        </tr>
        <tr>
            <td>SLAM</td>
            <td>SISR</td>
        </tr>
        <tr>
            <td>SLAM1, SLAM2</td>
            <td>SISR1, SISR2</td>
        </tr>
        <tr>
            <td rowspan='3'>SI02</td>
            <td colspan='2'>SI7</td>
        </tr>
        <tr>
            <td>SLAM</td>
            <td>SISR</td>
        </tr>
        <tr>
            <td>SLAM3, SLAM4, SLAM5</td>
            <td>SISR, SISR4, SISR 5</td>
        </tr>
        </div>
    </table>
    <?php
}
?>
    <?php
    tableau(); //J'appelle la fonction

    highlight_file(__FILE__);
?>
</body>

</html>