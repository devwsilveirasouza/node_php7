<?php

    echo "<br>";
    echo "<hr>";
    echo "FUNÇÕES PARA STRINGS <br />";
    echo "<hr>";
    echo "<br>";

/**
 * strtoupper
 * strtolower
 * substr
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

 echo "Função: strtoupper, converte uma string em caixa alta.<br />";
 echo "<br>";

 $nome = "Wellington";

 echo strtoupper($nome);

 echo "<br>";
 echo "<hr>";
 echo "<br>";

 echo "Função: strtolower, converte uma string em caixa baixa. <br />";
 echo "<br>";

 $carro = "FERRARI";

 echo strtolower($carro);

 echo "<br>";
 echo "<hr>";
 echo "<br>";

 echo "<br>";

 echo "Função: strlen, retorna a quantidade de caracteres de uma string.<br/>";
 echo "<br>";

 $carros = "FERRARI";

 echo strlen($carros);

 echo "<br>";
 echo "<hr>";
 echo "<br>";

 echo "<br>";
 echo "Função: substr, restorna uma parte de uma string de acordo com os parâmetros passados.";
 echo "<br>";

 $rest = substr("Wellington", -3); // Retorna a string inversa de acordo com o numero negativo informados
 echo $rest;
 echo "<br>";
 echo "<br>";

 $fruta = substr("Melancia", 2); // Retorna a string pulando a quantidade de caracter informado
 echo $fruta;
 echo "<br>";
 echo "<br>";

 $frutas = substr("Melancia", 2, -2); // Retorna a string pulando a quantidade de caracter informado
 echo $frutas;
 echo "<br>";
 echo "<br>";

 echo "<br>";
 echo "Função: str_pad, faz um incremento de caracter na string de acordo com os parâmetros passados.";
 echo "<br>";

 $input = "Alien";
 echo str_pad($input, 10);
 echo "<br>";

 $input1 = "Marco";
 echo str_pad($input1, 10, "=", STR_PAD_LEFT);
 echo "<br>";

 $input2 = "Leleco";
 echo str_pad($input2, 10, "*", STR_PAD_BOTH);
 echo "<br>";

 $input3 = "Lary";
 echo str_pad($input3, 10, "-");
 echo "<br>";
 echo "<br>";

 echo "<br>";
 echo "<hr>";
 echo "<br>";

 echo "<br>";
 echo "Função: str_repeat, repete uma string.";
 echo "<br>";

 $input4 = "Olá ";
 echo "<br>";
 echo str_repeat($input4, 5);

 echo "<br>";
 echo "<hr>";
 echo "<br>";

 // Esta função precisa ser melhor estudada
 echo "<br>";
 echo "Função: str_replace, esta função substitui uma string por outra.<br>";
 echo "<br>";
 // Fornece: <body text='black'>
$texto = "A seleção Brasileira será campeã do mundo!<br>";
$novoTexto = str_replace("campeã", "Hexa Campeã", $texto);
echo $novoTexto;
echo "<br>";
echo "<hr>";
echo "<br>";

echo "<br>";
echo "Função: strpos, retorna a posição de uma palavra em um texto.<br>";
echo "<br>";

echo strpos($texto, "será");
echo "<br>";
echo "<hr>";
echo "<br>";
