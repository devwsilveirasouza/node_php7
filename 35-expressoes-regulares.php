<?php 

echo "EXPRESSÕES REGULARES";
echo "<br>";
echo "<br>";

/**
 * EXPRESSÕES REGULARES
 * 
 * Define um padrão a ser usado para procurar ou
 * substituir palavras ou grupos de palavras.
 *  ^ início da expressão, $ final da expressão - /i -
 * case sensitive
 * [] conjunto de caracteres
 * {} ocorrências - ?{0,1} *{0,99} +{1,99}
 * /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 */

// $padrao = "/^abc$/i"; // i tira o case sensitive
// $padrao = "/^[a-z0-9]$/i"; // [] indica o conjunto de caracteres aceito / i tira o case sensitive
// $padrao = "/^[a-z0-9]{1,56}$/i"; // {1,56} define o número de caracteres aceitos
// $padrao = "/^[a-z0-9]?$/i"; // ? define uma ou nenhuma ocorrência aceita
// $padrao = "/^[a-z0-9]*$/i"; // * define varias ou nenhuma ocorrência aceita
// $padrao = "/^[a-z0-9]+$/i"; // + define uma ou várias ocorrências aceitas

// // CRIANDO PADRÃO DE EMAIL
// $email = "contato@test.com";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i"; // + define uma ou várias ocorrências aceitas

// // CRIANDO PADRÃO DE DATA
// $data = "20/10/2022";
// $padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

// // CRIANDO PADRÃO DE CEP
// $cep = "89015-250";
// $padrao = "/^[0-9]{5}\-[0-9]{3}$/";

// CRIANDO FORMATO DE CPF
$cep = "123.456.789-01";
$padrao = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";

if(preg_match($padrao, $cep)):
    echo "Válido";
    echo "<hr>";
    echo $cep;
else:
    echo "inválido";
    echo "<hr>";
endif;







?>