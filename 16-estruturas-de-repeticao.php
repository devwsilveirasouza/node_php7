<?php
    echo "<br>";
    echo "<hr>";
    echo " // While // <br> ";
    echo "<br>";
    echo "<br>";

    $c1 = 1;
    $c1 = 1;

    while ($c1 <= 10) {
        echo "Contador é $c1 <br>";
        $c1++;
    }

    echo "<hr>";

    echo "<br>";
    echo "<hr>";
    echo " // Do While // <br> ";
    echo "<br>";
    echo "<br>";

    $c2 = 1;

    do {
        echo "Contador é $c2 <br>";
        $c2++;
    } while ($c2 <= 10);

    echo "<hr>";

    echo "// Estrutura For // <br>";

    echo "<br>";
    echo "<br>";

    for ($i = 0; $i <= 10; $i++) :
        echo "Contador é $i <br>";
    endfor; 

    echo "<br>";

    $t = 9;

    echo "Abaixo a tabuada de $t.<br>";

    echo "<br>";
    for ($i = 0; $i <= 10; $i++) :
        echo "$t x $i = ".($t * $i).".<br>";
    endfor; 

    echo "<br>";
    echo "<hr>";

    echo "<br>";
    echo " // Estrutura Foreach // <br>";
    echo "<br>";

    $cores = array("Preto", "Azul", "Vermelho", "Verde", "Marrom", "Verde", "Amarelo");

    foreach($cores as $cor){
        echo $cor."<br>";
    }

    echo "<br>";
    echo "<hr>";
    
    echo "Acessando direto o atributo do array:<br>";
    echo "<br>";

    echo "$cores[1]</br>";

    echo "<br>";
    echo "<hr>";


?>