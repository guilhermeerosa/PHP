<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estados (Aula 10 PHP)</title>
</head>
<body>
    <?php
        $estado = $_GET["estado"];
        switch ($estado) {
            case "AM":
            case "RR":
            case "AP":
            case "PA":
            case "TO":
            case "RO":
            case "AC":
                echo "Região Norte";
                break;
            case "MA":
            case "PI":
            case "CE":
            case "RN":
            case "PE":
            case "PB":
            case "SE":
            case "AL":
            case "BA":
                echo "Região Nordeste";
                break;
            case "MT":
            case "MS":
            case "GO":
            case "DF":
                echo "Região Centro-Oeste";
                break;
            case "SP":
            case "RJ":
            case "ES":
            case "MG":
                echo "Região Sudeste";
                break;
            case "PR":
            case "RS":
            case "SC":
                echo "Região Sul";
                break;
            default:
                echo "Selecione um estado!";

        }
    ?>
    <br>
    <a href="03exercicio.html">Voltar</a>
</body>
</html>