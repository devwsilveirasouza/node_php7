<?php

    echo "<br/>";
    echo "Operadores Lógicos<br>";
    echo "<br/>";

    echo "Operadores lógicos nos permitem fazer comparações entre expressões.<br>";
    echo "<br/>";

    echo "01 - Operador e: && - and<br>";
    echo "02 - Operador ou: || - or<br>";
    echo "03 - Operador ou exclusivo: ( xor )<br>";
    echo "04 - Operador negação: ( ! )<br>";

    echo "<hr/>";
    
    $idade = 25;
    $nome = "Pedro";

    echo "<br/>";
    echo "Exemplo: 01";
    echo "<br>";

    if(($idade == 25 ) && ($nome == "Wellington")) :
        echo "É verdadeiro.";
    else:
        echo "Não é verdadeiro.";
    endif;

    echo "<br/>";
    echo "<hr/>";
    echo "<br/>";

    echo "<br/>";
    echo "Exemplo: 02";
    echo "<br>";

    if(($idade == 25 ) || ($nome == "Wellington")) :
        echo "É verdadeiro.";
    else:
        echo "Não é verdadeiro.";
    endif;

    echo "<br/>";
    echo "<hr/>";
    echo "<br/>";

    echo "<br/>";
    echo "Exemplo: 03";
    echo "<br>";

    if(($idade == 25 ) xor ($nome == "Wellington")) :
        echo "É verdadeiro.";
    else:
        echo "Não é verdadeiro.";
    endif;

    echo "<br/>";
    echo "<hr/>";
    echo "<br/>";

    echo "<br/>";
    echo "Exemplo: 04";
    echo "<br>";

    if(!($idade == 25 ) and ($nome == "Pedro")) :
        echo "É verdadeiro.";
    else:
        echo "Não é verdadeiro.";
    endif;

    echo "<br/>";
    echo "<hr/>";
    echo "<br/>";

    $carros = array("FERRARI", "LAMBORGUINI", "BMW", "MC LAREN");
    $marcas = array("FR", "LB", "BM", "ML");

    if((in_array("BMW", $carros)) and (in_array("FR", $marcas))):
        echo "Este veículo e marca estão cadastrados.";
    else:
        echo "Este veículos e marcas não estão cadastrados.";
    endif;

?>