<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
</head>
<body>
    <h1>Desafio 04 - Numero Primo</h1>
    <?php
        $n = 7;
        $divisor = 0;
        for ($i = 2; $i  <=$n; $i++) {
            if ( $n % $i == 0 ) {
                $divisor += 1;
            }
        }
        if ($divisor == 1) {
            echo "$n  é primo";
    
        }else{
            echo "$n não é primo";
        }
    ?>
</body>
</html>