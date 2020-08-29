<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Valores (Aula 11 PHP)</title>
</head>
<body>
    <form method="get" action="02exercicio-2.php">
    <?php
    $valor = 1;
    while ($valor <= 5) {
        echo "Valor $valor: <input type = 'number' name = 'v$valor' min='0' max = '100' ><br>";
        $valor++;
    }
    ?>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>