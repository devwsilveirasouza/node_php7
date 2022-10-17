<?php
  // ESCOPO GLOBAL
  $nome = "Wellington Silveira de Souza";// VARIÁVEL LOCAL
  $a = 1;
  $b = 3;
  $c = 7;

  function exibeNome(){
    global $nome;// DEFININDO VARIÁVEL COMO GLOBAL
    echo $nome;
  }

  exibeNome();
  echo "<hr>";
  /////////////////////

  function exibeCidade() {
    global $cidade; // DEFININDO COMO GLOBAL
    $cidade = "Rio de Janeiro";
  }

  exibeCidade();
  echo $cidade;
  echo "<hr>";
  /////////////////////

  function soma() {
    // ARRAY ASSOCIATIVO:
    // ONDE O NOME DA VARIÁVEL É A CHAVE DO ARRAY
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    // global $a, $b, $c; // DEFININDO COMO GLOBAL
    // echo $a + $b + $c;
  }

  soma(); // CHAMANDO A FUNÇÃO
  echo "<hr>";

 ?>
