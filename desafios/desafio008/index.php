<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $numero = $_GET['v1'] ?? 0.000;

        $rq = sqrt($numero);    
        $rc = pow($numero, 1/3);       
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" step="0.001" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>     

    <section id="resultado">
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($rq, 3, ",", ".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($rc, 3, ",", ".")?></strong></li>
        </ul>

        <br><br>   <!-- Ou assim-->
        
        <?php 
            echo "  <h2>Resultado final</h2>
                    <p>Analisando o <strong>número $numero</strong>, temos</p>
                    <ul>
                        <li>A sua raiz quadrada é <strong>".number_format($rq, 3, ",", ".")."</strong></li>
                        <li>A sua raiz cúbica é <strong>".number_format($rc, 3, ",", ".")."</strong></li>
                    </ul>         
                 ";
        ?>        
    </section>
</body>
</html>

