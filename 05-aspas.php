<?php

  // DIFERÊNÇAS ENTRE ASPAS SIMPLES E DUPLAS
  $nome = "Wellington";

  // ASPAS SIMPLES SÃO LITERAIS, NÃO INTERPRETAM VARIÁVEIS NO SEU ESCOPO
  echo 'Meu nome é $nome';
  echo '<br>';
  // ASPAS SIMPLES DEVEM SER CONCATENADAS PARA EXIBIR CONTEÚDO DA VARIÁVEL
  echo 'Meu nome é '.$nome.' e minha idade é \'38\'';
  echo '<hr>';
  // ASPAS DUPLAS INTERPRETAM NO SEU ESCOPO VARIÁVEIS
  $idade = 38;
  echo "Meu nome é $nome, e minha ídade é $idade anos.";
  echo "<hr>";

 ?>
