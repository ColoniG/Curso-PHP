<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas</title>
</head>
<body style="font-size: 1.4em;">    

    <?php        
        echo abs(-30)."<br>";  // valor absoluto
        echo base_convert(1100, 2, 10)."<br>";  // primeiro número, valor a ser convertido - segundo número, base a ser convertida - terceiro número, nova base
        echo ceil(2.5)."<br>";  // arredonda para cima
        echo floor(2.5)."<br>";  // arredonda para baixo
        echo round(2.6)."<br>";  // arredondamento aritimético
        echo intdiv(5, 2)."<br>";  // divisão inteira
        echo min(5, 99, 7, 9, 24, 50)."<br>";  // menor valor
        echo max(5, 99, 7, 9, 24, 50)."<br>";  // maior valor
        echo pi()."<br>";
        echo M_PI ."<br>";
        
        
    ?>  

</body>
</html>