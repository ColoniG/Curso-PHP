<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $numero1 = $_GET['n1'] ?? 0.00; 
        $passo1 = $_GET['p1'] ?? 1; 
        $numero2 = $_GET['n2'] ?? 0.00; 
        $passo2 = $_GET['p2'] ?? 1;
        
        $mas = ($numero1+$numero2) / 2;
        $map = ($numero1*$passo1 + $numero2*$passo2) / ($passo1 + $passo2);
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">1º Valor</label>
            <input type="number" name="n1" id="n1" step="0.01" value="<?=$numero1?>">

            <label for="p1">1º Passo</label>
            <input type="number" name="p1" id="p1" step="1" value="<?=$passo1?>">
            
            <label for="n2">2º Valor</label>
            <input type="number" name="n2" id="n2" step="0.01" value="<?=$numero2?>">
            
            <label for="p2">2º Passo</label>
            <input type="number" name="p2" id="p2" step="1" value="<?=$passo2?>">
            
            <input type="submit" value="Calcular Médias">
        </form>
    </main>     

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$numero1?> e <?=$numero2?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?=number_format($mas, 2, ",", ".")?>.</li>
            <li>A <strong>Média Aritimética Ponderada</strong> com pesos <?=$passo1?> e <?=$passo2?> é igual a <?=number_format($map, 2, ",", ".")?>.</li>
        </ul>     
    </section>
</body>
</html>

