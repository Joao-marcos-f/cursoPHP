<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio PHP 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
        $dividendo = $_GET["dividendo"]?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        $divint = intdiv($dividendo, $divisor);
        $divrest = $dividendo % $divisor;

        ?>
        <h1>anatomia da divisao</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">dividendo</label>
            <input type="number" name="dividendo" id="idividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">divisor</label>
            <input type="number" name="divisor" min="1" id="idivisor" <?=$divisor?>>
            <button type="submit">analisar</button>
        </form>
        <section>
            <h1></h1>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$divrest?></td>
                    <td><?=$divint?></td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>