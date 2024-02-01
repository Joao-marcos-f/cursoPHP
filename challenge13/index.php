<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge PHP 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

    ?>
    <main>
        <h1>ATM</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="withdraw">how much you want to withdraw</label>
            <input type="number" name="withdraw" id="withdraw">
            <input type="submit" value="send">
            <p>bills allow: R$100, R$50, R$10, $5</p>
        </form>
    </main>
    <section>
        <h1>Results</h1>
        <p>the ATM will give you the following bills:</p>
    </section>
</body>
</html>