<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obtendo dados de formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>resdultado do processamento</h1></header>
    <main>
        <?php 
        $nome = $_GET["nome"] ?? "sem nome";
        $snome = $_GET["snome"] ?? "desconhecido";

        echo "<p>prazer em te conhecer, $nome $snome, esse é meu site</p>"
        ?>
        <p><a href="javascript:history.go(-1)">volta a pagina anterior</a></p>
    </main>
</body>
</html>