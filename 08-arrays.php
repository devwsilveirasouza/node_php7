<?php
  // ARRAYS NUMÉRICOS
  // CRIANDO ARRAY
  $carros = array(1=> "BMW", 2=> "VELOSTER", 3=> "HILUX", 4=> "MERCEDEZ BENZ");
  $carros[] = "AMAROK";
  $carros[10] = "FERRARI";
  echo "<br>";

  print_r($carros);

  echo "<br>";
  echo $carros[1]."<br>";
  echo $carros[3]."<br>";
  echo $carros[5]."<br>";
  echo $carros[10]."<br>";

  // OUTRA MANEIRA DE CRIAR UM ARRAY
  $motos = array();
  $motos[] = "YAMAHA";
  $motos[] = "HONDA";
  $motos[] = "SUZUKI";
  $motos[5] = "DUCATI";
  echo "<br>";
  print_r($motos);
  echo "<br>";
  echo $motos[5];
  echo "<br>";
  echo "<br>";

  // OUTRA MANEIRA DE CRIAR ARRAY
  $clientes = ["Rodrigo", "Felipe", "Baia"];
  print_r($clientes);
  echo "<br>";

  // AULA 09 - FUNÇÕES DE ARRAY
  // COUNT : EXIBE A QUANTIDADE DENTRO DE UM ARRAY
  echo "<br>";
  $totalCarros;
  $totalMotos;
  $totalClientes;
  echo count($carros);
  echo "<br>";
  echo count($motos);
  echo "<br>";
  echo count($clientes);
  echo "<br>";
  echo "<br>";

  echo "<hr>";
  foreach($carros as $carro){
    echo "O modelo do carro é $carro.";
    echo "<br>";
  }
  echo "<hr>";

  foreach($motos as $moto){
    echo "A marca da moto é $moto.";
    echo "<br>";
  }
  echo "<hr>";

  foreach($clientes as $cliente){
    echo "O nome do cliente é $cliente.";
    echo "<br>";
  }
  echo "<hr>";

  // AULA 10
  // ARRAYS ASSOCIATIVOS
  $pessoa = array("nome" => "Wellington", "idade" => 39, "altura" => 1.75);
  $pessoa["cidade"] = "Blumenau";
  $pessoa["bairro"] = "Vorstadt";
  $pessoa["email"]  = "silveira@test.com";
  echo "<br>";
  // echo $pessoa["cidade"];
  foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
  }
  echo "<hr>";

  // ARRAYS MULTIDIMENSIONAIS
  $times = array(
              "carioca"  => array("Vasco", "Flamengo", "Botafogo"),
              "paulista" => array("São Paulo", "Corinthians", "São caetano"),
              "baiano"   => array("Bahia", "Vitória", "Itabuna"));

  // $times["paulistas"] = "São Bernardo do Campo";
  echo "Times do Campeonato Carioca";
  echo "<br>";
  foreach($times["carioca"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
  }

  echo "<br>";
  print_r($times);
  echo "<br>";
  echo "<br>";
  echo $times["paulista"][1];
  echo "<br>";
  echo $times["baiano"][0];
  echo "<br>";
  echo $times["carioca"][2];
  echo "<br>";
  echo "<hr>";

 ?>
