<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>

<?php
    if(isset($_POST['enviar-formulario'])):
        $formatosPermitidos = array("png", "jpg", "jpeg");
        // PEGAR A EXTENÇÃO DO ARQUIVO //
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        // Verificar se o formato é permitido
        if (in_array($extensao, $formatosPermitidos)):
            // $mensagem = "Formato permitido.";
            $pasta = "files/"; // Local da pasta onde as imagens serão armazenadas
            $temporario = $_FILES['arquivo']['tmp_name']; // Pegando a valor do arquivo 
            // Renomeando o nome e concatenando com a extenção
            $novoNome = uniqid().".$extensao";

            // Fazendo o upload - fazendo verificação - pegando os caminhos de origem e destino
            if (move_uploaded_file($temporario, $pasta.$novoNome)):
                $mensagem = "Upload feito com sucesso.";
            else: 
                $mensagem = "Erro, não foi possível fazer o upload.";
            endif;
        else:
            // echo "Este formato não é permitido.";
            echo "Formato inválido!";

        endif;

        echo $mensagem;

        // echo $extensao;
        // var_dump($_FILES);
    endif;
?>

    <!-- Enctype é obrigatório para o upload de arquivo -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" 
        enctype="multipart/form-data"> 

        <input type="file" name="arquivo"><br><br>
        <input type="submit" name="enviar-formulario">

    </form>

</body>

</html>