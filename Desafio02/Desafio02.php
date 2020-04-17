<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio02</title>
</head>
<body>
    <h1>Desafio 02 - Tabuada</h1>
    <?php
        for ($i=1; $i < 10 ; $i++) { 
            for ($j=1; $j < 10 ; $j++) { 
                $res = $i * $j;
                echo("<p>$i x $j = $res<p>");
            }    
            echo("<br>");
        }
    ?>
</body>
</html>