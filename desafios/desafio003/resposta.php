<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $cotacao = 5.22;
            $real = $_GET["numero"];
            $usd = $real/$cotacao;            

            // echo "<p>Seus R$ " . number_format($numero, 2,",",".") . " equivalem a <strong>U$$ " . number_format($usd, 2, ",", ".") . "</strong></p>";

            // Formatação de Moedas com Internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $usd, "USD") . "</strong></p>";

            
            echo "<p style='font-size: .8em';><strong>*Cotação fixa de R$ 5,22</strong> informado diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)" style="color: white;">Voltar</button>
    </main>
</body>
</html>