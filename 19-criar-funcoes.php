<?php

echo "<h3>// CRIANDO FUNÇÕES //</h3>";

function exibirNome($nome) {
    echo "Meu nome é $nome.";
}

// function exibirNome() {
//     echo "Meu nome é Wellington.";
// }

exibirNome("Wellington");

echo "<br>";
echo "<hr>";
echo "<br>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7):
        echo "$nome foi aprovado com a média ".ceil($media).".";
    else:
        echo "$nome foi reprovado com $media.";
        endif;
    }

calcularMedia("Wellington", 5, 9, 7, 8);

echo "<br>";
echo "<hr>";
echo "<br>";
