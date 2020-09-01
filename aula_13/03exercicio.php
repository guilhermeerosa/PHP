<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Primos (Aula 13 PHP)</title>
</head>
<body>
    <?php
    $n = $_GET["num"];
    $div = 0;
    echo "Analisando o numero $n <br>";
    echo "Valores multiplos: ";
    for ($c = 1; $c <= $n; $c++) {
        if ($n % $c == 0) {
            echo "$c ";
            $div++;
        }
    }
    echo "<br>Total de múltiplos: $div <br> Resultado: ";
    if ($div == 2) {
        echo "$n É PRIMO!";
    }
    else {
        echo "$n NÃO É PRIMO!";
    }
    ?>
<br>
<a href="03exercicio.html">Voltar</a>
</body>
</html>