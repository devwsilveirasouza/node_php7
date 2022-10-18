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
    if (isset($_POST['enviar-formulario'])) :
        $formatosPermitidos = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG");

        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $quantidadeArquivos) :
            // PEGAR A EXTENÇÃO DO ARQUIVO //
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            // Verificar se o formato é permitido
            if (in_array($extensao, $formatosPermitidos)) :
                // $mensagem = "Formato permitido.";
                $pasta = "files/"; // Local da pasta onde as imagens serão armazenadas
                $temporario = $_FILES['arquivo']['tmp_name'][$contador]; // Pegando a valor do arquivo 
                // Renomeando o nome e concatenando com a extenção
                $novoNome = uniqid() . ".$extensao";
                // Fazendo o upload - fazendo verificação - pegando os caminhos de origem e destino
                if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                    echo "Upload feito com sucesso para $pasta.$novoNome.<br>";
                else :
                    echo "Erro, não foi possível fazer o upload.";
                endif;
            else :
                // echo "Este formato não é permitido.";
                echo " A extensão: $extensao náo é permitida.<br>";
            endif;
            $contador++;
        endwhile;

    // echo $extensao;
    // var_dump($_FILES);
    endif;
    ?>

    <!-- Enctype é obrigatório para o upload de multiplos arquivos -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="submit" name="enviar-formulario">

    </form>

</body>

</html>