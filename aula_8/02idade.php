<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
        $idade = date("Y") - $ano;
        echo "$nome é do sexo $sexo e tem $idade anos.";
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>