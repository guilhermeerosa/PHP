<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Incremento e decremento (Aula 6 PHP)</title>
</head>
<body>
    <?php
        #INCREMENTO E DECREMENTO
        $ano_atual = $_GET['ano'];
        echo "O ano atual é $ano_atual e o ano anterior foi ". --$ano_atual;

    ?>
</body>
</html>