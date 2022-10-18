<?php
// Conexão com o banco
require_once 'db_connect.php'; // Inclui o arquivo 'db_connect'
// Iniciar Sessão
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])) :
    $erros = array();
    // mysqli_escape_string <- Realiza o filtro dos campos: "login e senha"
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    // Verificar se os campos estão vazios
    if (empty($login) or empty($senha)) :
        $erros[] = '<li> Os campos: login e senha precisam ser preenchidos. </li>';
    else :
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) :
            // Criptografar senha
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            
            if (mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect); // Fechando a conexão
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');// Redireciona para página restrida
            else:
                $erros[] = "<li> Usuário e Senha não conferem. </li>";
            endif;
        else :
            $erros[] = '<li> Usuário inexistente. </li>';
        endif;

    endif;

endif;

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1 style="padding: 10px;"> Login </h1>

    <!-- Continuar desenvolvimento do login... -->
    <?php

    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo "<li> $erro </li>";
        endforeach;
    endif;


    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="padding: 20px;">

        Login: <input type="text" name="login" /><br><br>
        Senha: <input type="password" name="senha" /><br><br>

        <button type="submit" name="btn-entrar"> Entrar </button>

    </form>

</body>

</html>