<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $n = $_GET["numero"];
        echo "Tabuada de $n <br>";
        $c = 1;
        while ($c <= 10) {
            $t = $n * $c;
            echo "$n X $c = $t <br>";
            $c++;
        }
    ?>
    <br>
<a href="03exercicio.html">Voltar</a>
</body>
</html>