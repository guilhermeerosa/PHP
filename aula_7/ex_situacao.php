<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercicio de Situação (Aula 7 PHP)</title>
</head>
<body>
    <?php
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $media = ($nota1 + $nota2) / 2;
        echo "Sua média é $media <br>";
        $situacao = $media < 7? "REPROVADO" : "APROVADO";
        echo "Sua situação é: $situacao"
    ?>
</body>
</html>