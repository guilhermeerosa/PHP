<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula (Aula 10 PHP)</title>
</head>
<body>
    <?php
        $dia = $_GET["dia"];
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Vai estudar!";
                break;
            case 7:
            case 8:
                echo "Pode descansar.";
                break;
            default:
                echo "Dia invalido!";
        }
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>