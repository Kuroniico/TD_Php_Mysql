<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2.1</title>
</head>
<body>
    <?php
        $montableau =array(1,2,3,4,5);
        echo '<table border=1><tr>';
            for($i=0;$i<5;$i++){
                echo "<td>".$montableau[$i]."</td>";
                }
                echo "</tr></table>";

        
    ?>
</body>
</html>