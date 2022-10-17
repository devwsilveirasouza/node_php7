<?php
echo "<hr>";
echo "<hr>";
echo "********************************************************<br>";
 echo '//  ----------  FUNÇÕES DE ARRAYS  ---------------  // <br>';
  echo "********************************************************<br>";
 echo '// is_array($array) = verificar determinada variável é um array<br>';
  echo "********************************************************<br>";
 $nomes = array("Maria","Pedro", "Jõao");
 echo "<br>";
 print_r($nomes);
 foreach($nomes as $nome){
   echo "<br>";
   echo $nome;
 }
 echo "<br>";
 echo is_array($nomes);
  if(is_array($nomes)){
    echo "É um array";
  } else {
    echo "Não é um array";
  }
  echo "<hr>";
  echo "<hr>";

 echo "********************************************************<br>";
 echo '// in_array($valor, $array) = verificar se um determinado valor existe em alguma posição do array<br>';
 echo "********************************************************<br>";
 echo in_array("Pedro", $nomes);
 echo "<hr>";
 if(in_array("Maria", $nomes)){
   echo "Existe no array";
 } else {
   echo "Não existe no array";
 }
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_key($array) = retorna um novo array com as chaves do array passado como parâmetro<br>';
 echo "********************************************************<br>";
 $keys = array("Mulher"=>"Jana","Filho"=>"Breno","Filha"=>"Brenda");
 $keys_array = array_keys($keys);
 print_r($keys_array);
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_values($array) = retorna um novo array com valores do array passado como parâmetro<br>';
 echo "********************************************************<br>";
 $values = array_values($nomes);
 print_r($values);
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_merge($arra1, $array2) = agrega o conteúdo dos dois arrays<br>';
 echo "********************************************************<br>";
 $carros = array("Camaro", "Uno", "Gol");
 $motos = array("Pop100", "Srad1000", "Kawasaki Ninja");
 $veiculos = array_merge($carros, $motos);
 print_r($veiculos);
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_pop($array) = exclui a última posição do array<br>';
 echo "********************************************************<br>";
 $carros1 = array("Palio", "Opala", "Fusca", "Corcel");
 print_r($carros1);
 echo "<br>";
 echo array_pop($carros1);
 echo "<br>";
 print_r($carros1);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_shift($array) = exclui a primeira posição do array<br>';
 echo "********************************************************<br>";
 $carros1 = array("Mercedez", "Opala", "Fusca", "Corcel");
 print_r($carros1);
 echo "<br>";
 echo array_shift($carros1);
 echo "<br>";
 print_r($carros1);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array<br>';
 echo "********************************************************<br>";
 $carros1 = array("Mercedez", "BMW", "Fusca", "Corcel");
 print_r($carros1);
 echo "<br>";
 echo array_unshift($carros1, "Gol", "Fiesta", "Palio Weekend"); // Mostra a posição da inserção
 echo "<br>";
 print_r($carros1);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_push($array, "valor", "valor") = adiciona um ou mais elementos no final do array<br>';
 echo "********************************************************<br>";
 $carros1 = array("Palio", "Opala", "Fusca", "Corcel");
 print_r($carros1);
 echo "<br>";
 array_push($carros1, "Porshe", "Lamborgini", "Ferrari"); // agregando valores no array
 echo "<br>";
 print_r($carros1);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_combine($keys, $values) = mescla os dois arrays passados<br>';
 echo "********************************************************<br>";
 $keys = array("Campeão", "Vice", "Terceio");
 $values = array("Corinthians", "Flamengo", "Botafogo");
 print_r($keys);
 echo "<br>";
 print_r($values);
 echo "<br>";
 $times = array_combine($keys, $values);
 echo "<br>";
 print_r($times);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// array_sum() = calcula a soma dos elementos de um array<br>';
 echo "********************************************************<br>";
 $soma = array(5,6,10,25,89);
 print_r($soma);
 echo "<br>";
 $total = array_sum($soma);
 echo $total;
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// explode("/", "20/01/2001") = transforma string em array<br>';
 echo "********************************************************<br>";
 $data = "16/10/2022";
 $novaData = explode("/", $data);
 print_r($novaData);
 echo "<br>";
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "Outro exemplo de explode: ";
 echo "<br>";

 $frase = "Meu nome não é Jhonny";
 $novaFrase = explode(" ", $frase);

 print_r($novaFrase);
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 echo "********************************************************<br>";
 echo '// implode("-", $arr) = transforma array em string<br>';
 echo "********************************************************<br>";
 $nome = array("Wellington", "Jana", "Matheus", "Maicon");
 $nomes = implode("-", $nome);
 print_r($nomes);
 echo "<br>";
 echo "<br>";
 echo "<hr>";
 echo "<hr>";
 echo "Outro exemplo de implode: ";
 echo "<br>";

$numero = array(1,5,6,8,9);
$numeros = implode(" / ", $numero);

print_r($numeros);
echo "<br>";
echo "<hr>";
echo "<hr>";










?>
