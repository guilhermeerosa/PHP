<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculo de média</title>
</head>
<body>
    <?php
    $nota1 = (float)$_GET["n1"];
    $nota2 = (float)$_GET["n2"];
    $media = (float)($nota1 + $nota2) / 2;
    echo "A média entre $nota1 e $nota2 é igual a $media <br>";
    if ($media < 5) {
        $situacao = "REPROVADO";
    }
    elseif ($media >= 5 && $media < 7) {
        $situacao = "RECUPERAÇÃO";
    }
    else {
        $situacao = "APROVADO";
    }
    echo "Situação do aluno: $situacao";
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>