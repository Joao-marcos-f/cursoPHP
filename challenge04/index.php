<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"];
        
        $wallet = $_GET["carteira"] ?? 0.00;
        $Exchange = $wallet / $cotação;
        echo "o valor R\$" . number_format($wallet,2) . " da sua carteira convertido em dolar ficaria <b>US\$" . number_format($Exchange ,2) ."</b>"
        
        ?>
        <button><a href="javascript:history.go(-1)">volta a pagina anterior</a></button>
    </main>
</body>
</html>