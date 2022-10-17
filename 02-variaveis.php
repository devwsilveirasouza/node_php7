<!doctype html>
<html lang-pt-BR>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Variáveis</title>       
    </head>
    <body>
        
        <?php

            $nome = "Pedro";
            $idade = 32;
            $altura = 1.68;

        	echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura. <br>";
            // ALTERANDO OS DADOS DA VARIÁVEL
            $nome = "Wellington";
            $idade = 40;
            $altura = 1.75;

            echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura. <br>";
            echo "<hr>";

            $carro = "Hilux";
            $Carro = "Fusca";

            $meunome = "Paulo";
            $meuNome = "Carlos";

            echo $carro;
            echo "<br>";

            echo $Carro;
            echo "<br>";

            echo $meunome;
            echo "<br>";

            echo $meuNome;
            echo "<br>";

            // NOME DE VARIÁVEIS VÁLIDOS

            // $meunome
            // $_meunome
            // $carro10
            // $nota1
            // $meu_nome
            // $meuNome

            // NOME INVÁLIDOS
            // $123456nome
            // $carro*&!@#
            // $meu carro
        	
        ?>

    </body>
</html>
