<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Valores (Aula 11 PHP)</title>
</head>
<body>
    <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            $url = "v". $i;
            $$v = empty($_GET[$url]) ? 0 : $_GET[$url];
            $i++;
        }

        $i = 1;
        while ($i <=5) {
            $v = "num" . $i;
            echo "Valor $i: " . $$v . "<br>";
            $i++;
        }
    ?>
    <br>
    <a href="02exercicio.php">Voltar</a>
</body>
</html>