<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $txt = "Esta é uma aula de PHP";
        $cont = str_word_count($txt, 0);
        echo $cont;

        /*  0 = contador
            1 = array com posição por palavra
            2 = array com posição por letra */
    ?>
</body>
</html>