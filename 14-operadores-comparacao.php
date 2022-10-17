<?php

   /**
    * Operadores de Comparação
    
    ==
    !=
    ===
    !===
    <>
    <
    >
    <=
    >=
    <=>
     */ 
    echo "Operador de igualdade: ==";
    echo "<br/>";
    if (10 == 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador não igual: != ";
    echo "<br/>";
    if (10 != 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador de identidade: ===";
    echo "<br/>";
    if (10 === "10"):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    if (10 === 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador de não identico: !===";
    echo "<br/>";
    if (10 !== 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    if (10 !== "10"):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador de diferente: <>";
    echo "<br/>";
    if (10 <> 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    if (10 <> 12):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador menor que: <";
    echo "<br/>";
    if (10 < 12):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador maior que: >";
    echo "<br/>";
    if (10 > 12):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";
    
    echo "Operador maior ou igual: >=";
    echo "<br/>";
    if (10 >= 9):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador menor ou igual: <=";
    echo "<br/>";
    if (10 <= 10):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<br>";

    echo "Operador Spaceship: <=>";
    echo "<br>";

    var_dump(10 <=> 12);
        
    echo "<br>";

    var_dump(12 <=> 12);
    
    echo "<br>";

    var_dump(12 <=> 10);
    
    echo "<br>";    
    echo "<br>";
?>