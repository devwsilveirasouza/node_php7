<?php
echo "<hr>";
echo "<hr>";
echo "********************************************************<br>";
echo '//  ----------  CONDICIONAIS  ---------------  // <br>';
echo "********************************************************<br>";
echo '// Estruturas condicionais: if - else - elseif <br>';
echo "********************************************************<br>";
echo "<br>";
echo "Estrutura IF ELSE ELSEIF ";
echo "<br>";

  $n1 = 10;

  if ($n1 == 10):
    echo "É igual a 10";
    elseif($n1 <= 9):
      echo "É menor ou igual a 9";
  else:
    echo "É maior do que 10";
  endif;

  echo "<br>";
  echo "Outro exemplo: ";
  echo "<br>";

  $media = 7;
  echo "Operador ternário: (?) é igual a IF e (:) é igual a ELSE ";
  echo ($media >= 7) ? "Aprovado!" : "Reprovado";

  echo "<hr>";
  echo "<hr>";

  echo "********************************************************<br>";
  echo '// Estrutura condicional: SWITCH CASE <br>';
  echo "********************************************************<br>";
  echo "<br>";

  $cor = "azul";

  switch ($cor):
    case "vermelho":
    echo "Sua cor preferida é o vermelho";
    break;

    case "verde":
    echo "Sua cor preferida é o verde";
    break;

    case "azul":
    echo "Sua cor preferida é o azul";
    break;

    default:
    echo "Não foi escolhida nenhuma cor.";

  endswitch;

 ?>
