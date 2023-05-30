<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $salario = $_GET['v1'] ?? 0.00;

        $minimo = 1_380.60;
        $numSal = (int)($salario/$minimo);
        $resto = $salario % $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$ <?= number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>     

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$ <?=number_format($salario, 2, ",", ".")?> ganha <strong><?=$numSal ?> salários mínimos</strong> + R$ <?=number_format($resto, 2, ",", ".")?>.</p>
    </section>
</body>
</html>

