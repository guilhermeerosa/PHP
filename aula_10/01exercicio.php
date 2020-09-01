<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calcular</title>
</head>
<body>
    <?php
    $n = $_GET["num"];
    $o = $_GET["op"];
    switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = pow($n, 3);
            break;
        case 3:
            $r = sqrt($n);
    }
    echo "O resultado da operação é $r"
    ?>
    <br>
    <a href="01exercicio.html">Voltar</a>
</body>
</html>