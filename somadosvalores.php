<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos valores definidos</title>
</head>
<body>
    
<marqueee behavior="alternate" direction="right" scrollamount="10"><h1>Efetuando uma soma com PHP</h1></marqueee><BR>

<?php
    //variável
    $num1 = 200;
    $num2 = 500;
    

    //efetuar a soma
    $total1 = $num1 - $num2;
    $total2 = $num1 + $num2;
    $total3 = $num1 * $num2;
    $total4 = $num1 / $num2;

    //mostrar resultado
    echo "<i>O resultado da subtração é: </i><b>$total1</b><br><hr>";
    echo "<i>O resultado da adição é: </i><b>$total2</b><br><hr>";
    echo "<i>O resultado da multiplicação é: </i><b>$total3</b><br><hr>";
    echo "<i>O resultado da divisão é: </i><b>$total4</b><br><hr>";
?>

</body>
</html>