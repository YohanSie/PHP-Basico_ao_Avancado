<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="/cursophp/style.css">
</head>

<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php

        $reais = isset($_GET['cad']) ? floatval($_GET['cad']) : 0;

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $conversao = $reais / $cotacao;

        //echo "<p>A conversão de R\$" . number_format($reais, 2, ',', '.') . " para dólares é \$" . number_format($conversao, 2, ',', '.') . "</p>";

        // Formatação com internacionalização;
        $paises = [
            'BRL' => 'pt_BR', // Brasil
            'USD' => 'en_US', // Estados Unidos
            'EUR' => 'de_DE', // Alemanha/Euro
            'JPY' => 'ja_JP', // Japão
            'GBP' => 'en_GB', // Reino Unido
            'AUD' => 'en_AU', // Austrália
            'CAD' => 'en_CA', // Canadá
            'CNY' => 'zh_CN', // China
            'INR' => 'hi_IN', // Índia
            'RUS' => 'ru_RU', // Rússia
        ];

        // Seletor da moeda usando as chaves do array $paises
        $moeda = 'USD';
        $locale = $paises[$moeda] ?? 'pt_BR';

        $padrao = numfmt_create(locale: $locale, style: NumberFormatter::CURRENCY);

        echo "<p>A conversão de " . numfmt_format_currency($padrao, $reais, "BRL") . " para dólares é " . numfmt_format_currency($padrao, $conversao, "USD") . "</p>";

        echo "<h5>*Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "USD") . " informada diretamente no código</h5>"
        ?>


        <input type="button" value="Voltar" onclick="window.location.href='index.html';">
    </section>
</body>

</html>