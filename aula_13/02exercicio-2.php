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
        for ($c = 1; $c <= 10; $c++) {
            $t = $n * $c;
            echo "$n X $c = $t <br>";
        }
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>