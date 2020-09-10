<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $v = array("Aula", "de", "PHP");
        $txt = implode("#", $v);
        echo $txt;

        //join() == implode()
    ?>
</body>
</html>