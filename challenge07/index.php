<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge php 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $salary = $_GET['salary'] ?? 1;
        $min = 1412;

        $tot = intdiv($salary,$min);
        $dif = $salary%$min;
        ?>
        <h1>Tell us your salary:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salary">salary:</label>
            <input type="number" name="salary" id="isalaray">
            <input type="submit" value="send">
            <p><?="considerating the minimum wage as R\$" . number_format($min,2, "," , ".") ?></p>
        </form>
        <section>
            <h1>final result</h1>
            <p><?= "who make R\$" . number_format($salary,2, "," , ".") . " make a total of " . $tot ." minumun salary + R\$" . $dif ?></p>
        </section>
    </main>
</body>
</html>