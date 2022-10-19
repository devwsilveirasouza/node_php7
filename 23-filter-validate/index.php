<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php
    /**
     * // *** VALIDAÇÕES *** //
     * filter_input - filter_var
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_IP
     * FILTER_VALIDATE_URL
     */
    ?>

    <?php

    // if(isset($_POST['enviar-formulario'])):
    //     echo "Enviou <br><br>";
    //     var_dump($_POST);
    // endif;


    // if(isset($_POST['enviar-formulario'])):
    //     $erros = array();
    //     $idade = $_POST['idade'];
    //     echo $idade;
    // endif;

    // VALIDAÇÃO DO FORMULÁRIO //
    if (isset($_POST['enviar-formulario'])) :
        // Array de erros
        $erros = array();
        // Validações
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) :
            $erros[] = "Idade precisa ser um inteiro.";
        endif;
        
        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) :
            $erros[] = "Email inválido.";
        endif;

        if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) :
            $erros[] = "Peso precisa ser um float.";
        endif;

        if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) :
            $erros[] = "IP inválido.";
        endif;

        if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) :
            $erros[] = "URL inválida.";
        endif;

        // Exibindo mensagens 
        if (!empty($erros)) :
            foreach ($erros as $erro) :
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo "Dados validados com sucesso!";
        endif;

    endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <br><br>
        Idade:  <input type="text" name="idade" /><br><br>
        Email:  <input type="text" name="email" /><br><br>
        Peso:   <input type="text" name="peso" /><br><br>
        IP:     <input type="text" name="ip" /><br><br>
        Url:    <input type="text" name="url" /><br><br>

        <button type="submit" name="enviar-formulario">Enviar</button><br>

    </form>

</body>

</html>