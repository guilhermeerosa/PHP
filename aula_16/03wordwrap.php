<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $txt = "Esse era pra ser um texto gigante, mas não tenho muito o que escrever para realizar o teste";
        $res = wordwrap($txt, 20 ,"<br>", false);
        echo $res;
    ?>
</body>
</html>