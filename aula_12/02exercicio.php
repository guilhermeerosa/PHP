<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $n = $_GET["num"];
        $c = $n;
        $fat = 1;
        do {
            $fat *= $c;
            $c--;
        } while ($c >= 1);
        echo "O fatorial de $n é $fat!"
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>