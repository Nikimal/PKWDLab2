<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table cellspacing = "1">
    <caption>Таблица умножения</caption>
    <?php 
        for($i = 1; $i < 11; $i++){
            echo "<tr><td>" . $i . "</td>";
            for($j = 1; $j < 11; $j++){
                echo "<td>" . $j . "*" . $i . "=" . ($i*$j) . "</td>";
            }
        echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>