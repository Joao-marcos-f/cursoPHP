<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>resultado final</h2>
        <?php 
        $num = $_GET["num"] ?? $num = 0;
        $before = $num -1;
        $after = $num + 1;
        echo "<p>o numero escolhido foi <b>$num</b></p>
                o seu antecessor é $before <br>
                e seu sucessor é $after "
        ?>
        <button><a href="javascript:history.go(-1)">volta a pagina anterior</a></button>
    </main>
</body>
</html>