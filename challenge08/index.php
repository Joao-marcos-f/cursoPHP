<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge php 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;
        $rq = $num ** (1/2);
        $rc =$num ** (1/3);
    ?>
    <main>
        <h1>type a number</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>">
        <label for="num">Number: </label>
        <input type="number" name="num" id="inum" value="<?=$num?>">
        <input type="submit" value="calculate roots">
        </form>
    </main>
    <section>
        <h1>final result</h1>
        <p><?= "Analisando o numero ". $num . " temos: "?></p>
        <ul>
            <li>Its square root is <?= number_format($rq,3, ",", ".")?></li>
            <li>Its cubic root is <?= number_format($rc,3, ",", ".")?></li>
        </ul>
    </section>
</body>
</html>