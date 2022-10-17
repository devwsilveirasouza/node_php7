<?php

  echo "Tipo de dados suportados.";
  echo "<br>";
  echo "<br>";
  echo " ########## = Dados escaláveis = ############ ";
  echo "<br>";
  echo "<br>";
  // String
  $nome = "Wellington";
  var_dump($nome);
  if(is_string($nome)) :
    echo " => É uma string.";
  else:
    echo " => Não é uma string.";
  endif;
  echo "<hr>";

  // Int
  $numero = 15;
  var_dump($numero);
  if(is_numeric($numero)) :
    echo " => É um número inteiro.";
  else:
    echo " => Não é número inteiro.";
  endif;
  echo "<hr>";

  // Float
  $altura = 1.75;
  var_dump($altura);
  if(is_float($altura)):
    echo " => É um float.";
  else:
    echo " => Não é um float.";
  endif;
  echo "<hr>";

  // Boolean
  $admin = true;
  var_dump($admin);
  if(is_bool($altura)):
    echo " => É um booleano.";
  else:
    echo " => Não é um booleano.";
  endif;
  echo "<hr>";

  echo "<br>";
  echo "<br>";
  echo " ########### = Dados Compostos = ############# ";
  echo "<br>";
  echo "<br>";
  $carros = array("Ferrari","Camaro","Gol","Parati");
  var_dump($carros);
  if(is_array($carros)):
    echo " => É um array.";
  else:
    echo " => Não é um array.";
  endif;
  echo "<hr>";

  // CRIANDO A CLASSE CLIENTE E DEFININDO SEUS ATRIBUTOS
  class Cliente {
    public $nome;
    // MÉTODO DA CLASSE CLIENTE
    public function atribuirNome($nome) {
      $this->$nome = $nome;
    }
  }
  // INSTÂNCIANDO A CLASSE CLIENTE : AGORA OBJETO
  $cliente = new Cliente(); // CRIANDO O OBJETO

  $cliente->atribuirNome("Wellington"); // CHAMANDO O MÉTODO
  var_dump($cliente);

  if(is_object($cliente)):
    echo "É um objeto.";
  else:
    echo "Não é um objeto.";
  endif;
  echo "<hr>";

  echo "<br>";
  echo "<br>";
  echo " ########### = Dados Especiais = ########### ";
  echo "<br>";
  echo "<br>";
  // NULL
  $cidade = NULL;
  var_dump($cidade);
  echo "<hr>";
  // RESOURCE
  // Servem para fazer referências a arquivos externos

?>
