<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $pp = $_GET["pp"] ?? 0;
    $ap = $_GET["ap"]?? 0;

    $formula = ($pp * $ap)/100;
    $np = $pp + $formula;
    ?>
    <main>
        <h1>Price Readjuster</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="pp">Product Price U$</label>
        <input type="number" name="pp" id="ipp" value="<?=$pp?>" step="0.01" min="0.10">
        <label for="ap">What will be the adjustment percentage<strong>(<span id="p">?</span>%)</strong></label>
        <input type="range" name="ap" id="ap" value="<?=$ap?> "min="0" max="100" step="1" oninput="mudarvalor()">
        <input type="submit" value="send">
        </form>
    </main>
    <section>
        <h1>Results</h1>
        <p>a product costing U$<?=number_format($pp,2,",",".")?> with a adjustment of <?=$ap?>% will cost to you U$<?=number_format($np,2,",",".")?></p>
    </section>
    <script>
        mudarvalor()
        function mudarvalor(){
            p.innerText = ap.value;
        }
    </script>
</body>
</html>