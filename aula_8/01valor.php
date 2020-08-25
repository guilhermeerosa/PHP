<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $raiz = sqrt($valor);
        echo "A raiz quadrada de $valor é $raiz<br>";
    ?>
    <a href="01exercicio.html">Voltar</a>
</body>
</html>