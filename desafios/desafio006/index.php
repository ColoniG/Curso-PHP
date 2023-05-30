<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 1;
        $resto = $dividendo % $divisor; 
        $resultado = (int)($dividendo/$divisor);
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>     

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td style="text-decoration: underline"><?=$resto?></td>
                <td><?="$resultado"?></td>
            </tr>
        </table>    
    </section>
</body>
</html>

