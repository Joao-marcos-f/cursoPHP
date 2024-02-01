<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $byear = $_GET["byear"] ?? 2000;
    $year = $_GET["year"]?? date("Y");
    $age = $year - $byear;
    ?>
    <main>
        <h1>calculating your age</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="byear">witch year you bith:</label>
        <input type="number" name="byear" id="ibyear" max="<?=date("Y", strtotime('-1 year'))?>" min="1900" value="<?=$byear?>">
        <label for="year">you want to know your age from witch year (We are currently in <?= date("Y")?>)</label>
        <input type="number" name="year" id="iyear" min="1900" value="<?=$year?>">
        <input type="submit" value="send">
        </form>
    </main>
    <section>
        <h1>results</h1>
        <p>who was born on <?=$year . " will have ". $age?></p>
    </section>
</body>
</html>