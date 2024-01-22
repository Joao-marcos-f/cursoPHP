<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo de PHP</title>
</head>
<body>
    <h1>exemplo da função date</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); 
        echo "hoje é dia:" . date("d/M/Y");?>
    <p> <?php echo "e são:" . date("G:i:s");?></p>
</body>
</html>