<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"];            

            echo "O número escolhido foi <strong>$numero</strong><br>";
            echo "O seu <em>antecessor</em> é ". $numero-1 ."<br>";
            echo "O seu <em>sucessor</em> é ". $numero+1 ."<br>";
        ?>
        <br>
        <button onclick="javascript:history.go(-1)" style="color: white;">&#x2B05; Voltar</button>
    </main>
</body>
</html>