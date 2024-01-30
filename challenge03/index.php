<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $wallet = $_GET["carteira"] ?? 0.00;
        $Exchange = $wallet / 4.95;
        echo "o valor R\$" . number_format($wallet,2) . " da sua carteira convertido em dolar ficaria <b>US\$" . number_format($Exchange ,2) ."</b>"
        ?>
    </main>
</body>
</html>