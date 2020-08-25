<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercicio de eleições (Aula 7 PHP)</title>
</head>
<body>
    <?php
        $ano_nascimento = $_GET["ano"];
        $idade = 2020 - $ano_nascimento;
        echo "Sua idade é $idade anos <br>";
        $situacao = ($idade >= 18 && $idade < 65)? "OBRIGATÓRIO" : "OPCIONAL";
        echo "Seu voto é $situacao";
    ?>
</body>
</html>