<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes - PHP</title>
</head>
<body style="font-size: 1.4em;">    

    <?php
        $nome = "Gilson";
        $sobrenome = "Coloni";
        const ESTADO = "RJ";

        echo "$nome$sobrenome \u{1F596} <br/>";  
        echo '$nome$sobrenome \u{1F596} <br>';  
        echo "$nome$sobrenome, moro no ". ESTADO . "<br>";     
        echo "Estamos no ano de " . date('Y') . "<br><br>";
        

        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom \"Minotauro\" $snom<br>";   // Sequência de Escape
        echo "\n Nova linha - \t Tabulação Horizontal - \\ Barra Invertida - \$ Sinal de Cifrão";
    ?>   

</body>
</html>