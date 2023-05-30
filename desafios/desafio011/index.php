<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $preco = $_GET['preco'] ?? 0; 
        $percentagem = $_GET['percentagem'] ?? 0;
        $reajustado = $preco * $percentagem * 0.01 + $preco;
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0,01" value="<?=$preco?>"> 

            <label for="percentagem">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentagem" id="percentagem" min="0" max="100" step="1" value="<?=$percentagem?>" oninput="mudaValor()">
                       
            <input type="submit" value="Reajuste" >
        </form>
    </main>     

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=number_format($preco, 2, ",", ".")?>, com <strong><?=$percentagem?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($reajustado, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = percentagem.value;
        }
    </script>
</body>
</html>

