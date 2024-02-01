<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge PHP 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $ts = $_GET["total_seconds"] ?? 0;
    $sobra = $ts;
    //week time
    $weekt = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;

    //days time
    $dayt = (int)($sobra / 84_400);
    $sobra = $sobra % 84_400;

    //hours time
    $hourst = (int)($sobra / 3_600);
    $sobra = $sobra % 3_600;

    //minutes
    $minutest = (int)($sobra / 60);
    $sobra = $sobra % 60;

    //seconds
    $seconds = $sobra;
    ?>
    <main>
        <h1>Time Calculator</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
        <label for="total_seconds">what is the total of seconds ?</label>
        <input type="number" name="total_seconds" id="total_seconds" value="<?=$ts?>">
        <input type="submit" value="send">
        </form>
    </main>
    <section>
        <h1>Results</h1>
        <p>analyzing the value that you put in, <strong><?=number_format($ts,2,",",".")?> seconds</strong> are iqual to </p>
        <ul>
            <li><?=$weekt?> weeks</li>
            <li><?=$dayt?> days</li>
            <li><?=$hourst?> hours</li>
            <li><?=$minutest?> minutes</li>
            <li><?=$seconds?> seconds</li>
        </ul>
    </section>
</body>
</html>