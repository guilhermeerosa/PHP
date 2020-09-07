<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        }

        $x = 9;
        $y = 5;
        $res = soma($x, $y);
        echo "A soma de $x + $y é igual a $res";
    ?>
</body>
</html>