<?php
 $n1 = 5;
 $n2 = 2;

 $soma = $n1 + $n2;

echo "O resultado de $n1 + $n2 é $soma.\n";

//Subtração
$subtracao = $n1 - $n2;
echo "O resultado de $n1 - $n2 é $subtracao.\n";

//Divisão
$divisao = $n1 / $n2;
echo "O resultado de $n1 / $n2 é $divisao.\n";

// Multiplicação
$multiplicacao = $n1 / $n2;

echo "O resultado de $n1 * $n2 é $multiplicacao.\n";

//Modulo
$modulo = $n1 % $n2;
echo "O resultado de $n1 % $n2 é $modulo.\n";


//Valor absoluto

$valor = abs(-2);
echo "O valor absoluto é $valor.\n";

// Calculando potência 

$valorPotencia = 32;
$potencia = pow(3,2) ;
echo "A potência de $valorPotencia é $potencia.\n";

// Calculando raiz quadrada 
$valorRaiz = 25;
$raiz = sqrt(25);

echo "A raiz quadrada de $valorRaiz é $raiz.\n";

//Arredondando valores 
$valorDecimal = 2.5;
$arredonda = round($valorDecimal);

echo "Arrendondando o $valorDecimal ficamos com $arredonda.\n";

// Retornando a parte inteira
$valorDecimal = 5.8;
$inteiro = intval($valorDecimal);


echo "A parte inteira de $valorDecimal é $inteiro.\n";

//Formatando número 

$valorDecimal = 5.8;
$inteiro = number_format($valorDecimal, 2);


echo "$valorDecimal é R$ $inteiro.\n";

?>