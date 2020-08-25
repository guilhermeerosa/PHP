<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Referencia (Aula 6 PHP)</title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a e a variavel B vale $b"
    ?>
</body>
</html>