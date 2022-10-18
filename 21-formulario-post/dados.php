<?php
    // Recebendo os dados enviados pelo formulário
    $nome   = $_POST['nome'];
    $email  = $_POST['email'];

    echo "<br>";
    echo "Seu nome é $nome e seu email é $email.";
    echo "<br>";
    var_dump($_POST);
    echo "<br>";