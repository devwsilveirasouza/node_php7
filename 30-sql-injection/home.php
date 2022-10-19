<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Verificação
if (!isset($_SESSION['logado'])) :
    header("Location: index.php");
endif;

// Dados do usuário
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect); // Fechando a conexão
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>

<body>
    <h3> O seu ID é: <?php echo $_SESSION['id_usuario']; ?> <br></h3>
    <h3> Olá usuário: <?php echo $dados['nome']; ?> <br></h3>

    <a href="logout.php">Sair</a>
</body>

</html>