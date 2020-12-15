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

$Variable1 = "colone 1"; //Ici je déclare les variables qui contiennent le nom que je veux 
$Variable2 = "colone 2"; //donner aux colonnes


function tableau($nom1, $nom2){ //Je crée ma fonction en déclarant mes variables 
    
    ?>

    <table>
        <tr>
            <td></td>
            <td><?php echo $nom1; ?></td> <!--Le echo sert à afficher les noms définis dans les variables nom-->
            <td><?php echo $nom2; ?></td>
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
    tableau($Variable1, $Variable2); //Nouvelle fonction contenant les $Variables 1 et 2, déclarées en haut

    highlight_file(__FILE__);
?>
</body>

</html>