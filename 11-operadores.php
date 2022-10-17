<?php

echo "<br>";
echo "*************************************************<br>";
echo "   ------  Operadores aritméticos  ------- <br>";
echo "*************************************************<br>";
echo "<br>";

/**
 * Operadores Aritméticos
 * 
 * Adição +
 * Subtração -
 * Multilpicação *
 * Divisão /
 * Exponenciação **
 * Módulo %
 */

$n1 = 10;
$n2 = 20;
$n3 = 30;
$n4 = 40;
$n5 = 50;

$soma1 = $n1 + $n2;
// Adição +

echo "A soma de $n1 + $n2 é $soma1";
// Subtração
echo "<hr>";

echo "<br>";

$resultado = $n5 - $n3;

echo "O resultado da subtração de $n5 - $n3 é $resultado";

// Multilpicação
echo "<hr>";

echo "<br>";

$result = $n2 * $n4;

echo "O resultado da multiplicação de $n2 x $n4 é $result";

// Divisão
echo "<hr>";

echo "<br>";

$divisao = $n5 / $n1;

echo "O resultado da divisão de $n5 por $n1 é $divisao";

// Módulo
echo "<hr>";

echo "<br>";

$resto = $n5 % 2;

echo "O resto do módulo de $n5 por 2 é $resto";

// Exponenciação
echo "<hr>";

echo "<br>";

$expo = $n3 ** 3;

echo "O resultado da exponenciação de $n3 a 3 é $expo";