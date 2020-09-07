<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        function soma() {
            $p = func_get_args();
            $total = func_num_args();
            $s = 0;
            for ($i=0; $i < $total; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
        $res = soma(3, 5, 2);
        echo "A soma dos valores é $res";
    ?>
</body>
</html>