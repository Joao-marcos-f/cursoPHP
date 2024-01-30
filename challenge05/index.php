<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>analisador de numero real</h1>
        <?php 
        $num = $_POST["num"] ?? 0;
        $int = (int) $num;
        $fra = $num - $int;
        echo "<p> analisando o numero ". number_format($num,3,",", ".")." informado pelo usuario: </p>";
        echo "<ul>
                <li>a parte inteira é". number_format($int, 0, ",", ".")."</li>
                <li>a parte fracionada é ". number_format($fra, 3,",",".")." </li>
            </ul>";
        ?>
        <button><a href="javascript:history.go(-1)">volta a pagina anterior</a></button>
    </main>
</body>
</html>