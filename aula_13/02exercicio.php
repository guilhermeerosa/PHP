<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada (Aula 13 PHP)</title>
</head>
<body>
<form method="get" action="02exercicio-2.php">
    <label for="numero>">Número: </label>
    <select name="numero" id="numero>">
        <?php
            for ($c = 1; $c <= 10; $c++) {
                echo "<option>$c</option>";
            }
            ?>
    </select>
    <input type="submit" value="Calcular">
</form>
</body>
</html>