<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"] : "Texto padrão gerado automaticamente.";
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <title>Personalização</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
    echo "<span class='texto'>$txt</span>";
    ?>
    <br>
    <a href="03exercicio.html">Voltar</a>
</body>
</html>