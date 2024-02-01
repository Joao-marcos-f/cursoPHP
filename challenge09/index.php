<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge PHP 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $w1 = $_GET["w1"] ?? 0;
        $w2 = $_GET["w2"] ?? 0;

        $numbers = array($v1 , $v2);
        $avarege = array_sum($numbers)/count($numbers);

        $mp = ($v1*$w1 + $v2*$w2)/($w1+$w2);
    ?>
    <main>
        <h1>arithmetic mean</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1° value</label>
        <input type="number" name="v1" id="iv1" value="<?= $v1?>">
        <label for="w1">1° weight</label>
        <input type="number" name="w1" id="iw1" value="<?= $w1?>">
        <label for="v2">2° value</label>
        <input type="number" name="v2" id="iv2" value="<?= $v2?>">
        <label for="w2">2° weight</label>
        <input type="number" name="w2" id="iw2" value="<?= $w2?>">
        <input type="submit" value="calculate">
        </form>
    </main>
    <section>
        <h1>Results</h1>
        <p>Analyzing the Values <?=$v1 . " and " . $v2 ?></p>
        <ul>
            <li>The simple arithmetic mean of the two values is <?= number_format($avarege, 2)?></li>
            <li>the weighted arithmetic mean with weights <?= $w1 . " and " . $w2 . " is igual " . number_format($mp,3)?></li>
        </ul>
    </section>
</body>
</html>