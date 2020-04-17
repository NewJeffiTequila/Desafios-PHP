<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
</head>
<body>
    <h1>Desafio 03 - IMC</h1>
    <?php
        $altura = 1.75;
        $peso = 75;
        $imc = $peso /($altura * 2);
        echo "<p>Seu peso é:$peso<p>";
        echo "<p>E sua altura:$altura<p>";
        echo "<p>E seu imc:$imc<p>";
        switch ($imc) {
            case ($imc < 18.5):
                echo "<p>Abaixo do peso<p>";
                break;
            case ($imc >= 18.5 && $imc <= 24.9):
                echo "<p>Peso normal<p>";
                break;
            case ($imc >= 25 && $imc <= 29.9):
                echo "<p>Sobrepeso<p>";
                break;
            case ($imc >= 30 && $imc <= 34.9):
                echo "<p>Obesidade grau 1<p>";
                break;
            case ($imc >= 35 && $imc <= 39.9):
                echo "<p>Obesidade grau 2<p>";
                break;
            case ($imc > 40):
                echo "<p>Obesidade grau 3<p>";
                break;            
            default:
                break;
        }
    ?>
</body>
</html>