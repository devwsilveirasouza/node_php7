<?php
    // Recebendo os dados enviados pelo formulário
    $nome   = $_GET['nome'];
    $email  = $_GET['email'];

    echo "<br>";
    echo "Seu nome é $nome e seu email é $email.";
    echo "<br>";
    var_dump($_GET);
    echo "<br>";