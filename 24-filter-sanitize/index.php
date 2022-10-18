<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Sanitização</title>
</head>

<body>

    <?php
    /**
     * // *** SANITIZAÇÃO -> SÃO UTILIZADOS PARA LIMPAR AS VARIÁVEIS *** //
     * filter_input - filter_var
     * FILTER_SANITIZE_SPECIAL_CHARS
     * FILTER_SANITIZE_NUMBER_INT
     * FILTER_SANITIZE_EMAIL
     * FILTER_SANITIZE_URL
     */
    ?>

    <?php

    // VALIDAÇÃO DO FORMULÁRIO //
    if (isset($_POST['enviar-formulario'])) :

        // Array de erros
        $erros = array();

        // Filter Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome;

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);        
        if (!filter_var($idade, FILTER_VALIDATE_INT)) :
            $erros[] = "Idade precisa ser um inteiro";
        endif;

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_SANITIZE_EMAIL)):
            $erros[] = "Email inválido";
        endif;


        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_SANITIZE_URL)):
            $erros[] = "URL inválida.";
        endif;

        // Exibindo mensagens 
        if (!empty($erros)) :
            foreach ($erros as $erro) :
                echo "<li> $erro </li>";
            endforeach;
        else :
            echo "Dados validados com sucesso!";
        endif;

    endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <br><br>

        Nome: <input type="text" name="nome" /><br><br>
        Idade: <input type="text" name="idade" /><br><br>
        Email: <input type="text" name="email" /><br><br>
        Url: <input type="text" name="url" /><br><br>

        <button type="submit" name="enviar-formulario">Enviar</button><br>

    </form>

</body>

</html>