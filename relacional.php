<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Operadores relacionais (Aula 7 PHP)</title>
</head>
<body>
    <?php
        /* Maior >
        Menor <
        Maior igual >=
        Menor igual <=
        Diferente <> ou !=
        Igual ==
        Identico === */

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br>";
        $r = $tipo == "s" ? $n1 + $n2 : $n1 * $n2;
        echo "O resultado é $r";
    ?>
</body>
</html>