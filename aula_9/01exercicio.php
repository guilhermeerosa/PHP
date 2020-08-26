<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Idade</title>
</head>
<body>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos e ";
        if ($idade < 16) {
            $votar = "não pode votar e";
            $dirigir = "não pode dirigir.";
        }
        elseif ($idade >= 16 && $idade < 18) {
                $votar = "seu voto é opcional e";
                $dirigir = "não pode dirigir.";
        }
        elseif ($idade >= 65) {
                $votar = "seu voto é opcional e";
                $dirigir = "já pode dirigir.";
        }
        else {
            $votar = "seu voto é obrigatório e";
            $dirigir = "já pode dirigir.";
        }
        echo "$votar $dirigir";
    ?>
    <br>
    <a href="01exercicio.html">Voltar</a>
</body>
</html>