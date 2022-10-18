<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php 
    // Botão enviar
    if (isset($_POST['btn-entrar'])):
        echo "Clicou";
    endif;

?>

    <h1 style="padding: 10px;"> Login </h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="padding: 20px;">

        Login: <input type="text" name="login" /><br><br>
        Senha: <input type="password" name="senha" /><br><br>

        <button type="submit" name="btn-entrar"> Entrar </button>

    </form>

</body>
</html>