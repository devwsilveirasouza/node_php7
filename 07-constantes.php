<?php

  // CONSTANTES - NÃO PODEM SER ALTERADAS DURANTE A EXECUÇÃO
  define("NOME", "José Pedro");
  define("IDADE", 24);
  define("ALTURA", 1.98);
  define("CASADO", "Casado");
  // CONSTANTES ARRAY
  define("TIMES", ['CORINTHIANS', 'FLAMENGO', 'VASCO']);

  echo NOME;
  echo IDADE;
  echo ALTURA;
  echo CASADO;

  echo "<br>";
  echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.' e meu estado civil é '.CASADO.'.';
  echo "<hr>";

  var_dump(TIMES);
  echo "<hr>";
  echo TIMES[0];
  echo "<hr>";
  echo "<br>";

  // CONSTANTES SÃO GLOBAIS
  // logo podem ser usadas em todo o script
  // DIFERENTE DAS VARIÁVEIS
  // que precisam ser referênciadas para o seu uso
  function exibeNome(){
    echo NOME;
  }
  exibeNome();
  echo "<hr>";
  
 ?>
