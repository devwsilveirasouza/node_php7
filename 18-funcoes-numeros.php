<?php

// FUNÇÕES PARA NÚMEROS

/**
 * number_format
 * round
 * ceil
 * floor
 * rand
 */

echo "<hr>";
echo "<h3>number_format => Faz a formatação do valor.</h3>";
echo "<pre>";

 $db = 1234.56;

 $preco = number_format($db, 2, ",", ".");
 echo "O valor do produto é R$ $preco";
echo "</pre>";
 echo "<hr>";

 echo "<hr>";
echo "<h3>round => Faz o arredondamento de valor.</h3>";
echo "<pre>";

 $db = 1234.2;

 echo round($db);
echo "</pre>";
 echo "<hr>";

 echo "<hr>";
echo "<h3>ceil => Faz o arredondamento de valor, porém só arredonda para cima.</h3>";
echo "<pre>";

 $db = 1234.1;

 echo ceil($db);
echo "</pre>";
 echo "<hr>";

 echo "<hr>";
 echo "<h3>floor => Faz o arredondamento de valor, porém só arredonda para baixo.</h3>";
 echo "<pre>";
 
 $db = 1234.1;
 
 echo floor($db);
 echo "</pre>";
 echo "<hr>";

 echo "<hr>";
 echo "<h3>rand => Faz o sorteio de números aleatórios.</h3>";
 echo "<pre>";
 
  echo rand(1, 75);
 echo "</pre>";
  echo "<hr>";

