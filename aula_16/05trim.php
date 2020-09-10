<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $txt = "   Guilherme Rosa       ";
        echo (strlen($txt)), "<br>";
        $novo = trim($txt);
        echo (strlen($novo)), "<br>";

        //Tira espaços da esquerda
        $novo1 = ltrim($txt);
        echo (strlen($novo1)), "<br>";

        //Tira espaços da direita
        $novo2 = rtrim($txt);
        echo (strlen($novo2));
    ?>
</body>
</html>