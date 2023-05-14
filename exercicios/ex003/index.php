<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>

    <?php
        // 0x = hexadecimal -- 0b = binário -- 0 = Octal
        $num1 = 0b10;
        $num2 = 010;
        $num3 = 0x10;
        echo "Valor representado em BINÁRIO $num1<br/>";    
        echo "Valor representado em HEXADEC. $num2<br/>";  
        echo "Valor representado em OCTAL $num3<br/><br/><br/>"; 
        
        $v = 3e2;     //  3 x 10^(2)
        var_dump($v);  //   var_dump  -- bom para testar tipo primitivo

        echo "<br/>";

        $num4 = (int)5e2;  //   Coerção
        var_dump($num4);  

        echo "<br/>";

        $num5 = "950";  
        var_dump($num5);  
        echo "<br/>";
        $num5 = (int)"950";   //   Coerção
        var_dump($num5);  

        echo "<br/><br/><br/>"; 

        $buleano = true;
        var_dump($buleano);
        echo $buleano;  //  bool no echo é 1 para TRUE e vazio para FALSE  

        echo "<br/><br/><br/>"; 

        $vet = [7, "Gilson", false, 5.2];
        var_dump($vet);

        echo "<br/><br/><br/>"; 

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
        
</body>
</html>