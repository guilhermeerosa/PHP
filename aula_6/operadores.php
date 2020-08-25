<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Operadores (Aula 6 PHP)</title>
</head>
<body>
    <?php
        #OPERADORES
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ',', '.');
        $preco += $preco * 0.1;
        echo "<br>E o preço com acrescimo de 10% é R$ ". number_format($preco, 2, ',', '.');
        $preco -= $preco * 0.1;
        echo "<br>E o preço com desconto de 10% é R$ ". number_format($preco, 2, ',', '.');
    ?>
</body>
</html>