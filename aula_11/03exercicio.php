<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $inicio = $_GET["inicio"];
        $fim = $_GET["fim"];
        $incremento = $_GET["incremento"];
        if ($inicio > $fim) {
            $i = $inicio;
            while ($i >= $fim){
                echo $i . "<br>";
                $i -= $incremento;
            }
        }
        /*else {
            $i = $inicio;
            while ($i <= $fim) {
                echo $i . "<br>";
                $i += $incremento;
            }
        }*/
    ?>
    <br>
    <a href="03exercicio.html">Voltar</a>
</body>
</html>