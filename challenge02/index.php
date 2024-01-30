<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>trabalhando com numeros aleatorios</h1>
        <p>gerando numeros aleatorios de 0 a 100</p>
        <?php 
            $num = mt_rand(0,100);
            echo "<p>o valor sorteado foi <b>$num</b></p>"
        ?>
        <button onclick="location.reload()">gerar numero</button>
    </main>
</body>
</html>