<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $atual = (int)(date("Y"));
        $nascimento = $_GET['nasc'] ?? 2000; 
        $anoFuturo = $_GET['anofut'] ?? $atual; 
        $idade = $anoFuturo - $nascimento;
        
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="0" max="<?=$atual?>" value="<?=$nascimento?>"> 

            <label for="anofut">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="anofut" id="anofut" min="0" value="<?=$anoFuturo?>">
                        
            <input type="submit" value="Qual será minha idade?" >
        </form>
    </main>     

    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoFuturo?>!</p>
    </section>
</body>
</html>

